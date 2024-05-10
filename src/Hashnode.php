<?php

namespace Dcblogdev\Hashnode;

use Dcblogdev\Hashnode\Fragments\PostFragment;
use Dcblogdev\Hashnode\Fragments\PostsFragment;
use Dcblogdev\Hashnode\Fragments\PublicationFragment;
use Dcblogdev\Hashnode\Fragments\StaticPageFragment;
use Dcblogdev\Hashnode\Fragments\StaticPagesFragment;
use Illuminate\Support\Facades\Http;
use stdClass;

class Hashnode
{
    protected string $url;

    protected string $host;

    protected string $perPage;

    public function __construct()
    {
        if (config('hashnode.url') === null) {
            abort(400, 'Hashnode url not found or not set in .env');
        }

        if (config('hashnode.host') === null) {
            abort(400, 'Hashnode host not found or not set in .env');
        }

        $this->url = config('hashnode.url');
        $this->host = config('hashnode.host');
        $this->perPage = config('hashnode.perPage');


    }

    public function getPublication(): StdClass
    {
        $query = 'query Publication '.PublicationFragment::handle($this->host);

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        return $response->data->publication;
    }

    public function getPosts(): StdClass
    {
        $query = 'query Publication {
            publication(host: "'.$this->host.'") {
                '.PostsFragment::handle($this->perPage, $this->getAfter()).'
            }
        }';

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        return $response->data->publication->posts;
    }

    public function getPostsByTag(string $tag): StdClass
    {
        $filter = "tagSlugs: [\"$tag\"]";
        $query = 'query Publication {
            publication(host: "'.$this->host.'") {
                '.PostsFragment::handle($this->perPage, $this->getAfter(), $filter).'
            }
        }';

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        return $response->data->publication->posts;
    }

    public function getPost(string $slug): stdClass
    {
        $query = 'query Publication {
            publication(host: "'.$this->host.'") {
                '.PostFragment::handle($slug).'
            }
        }';

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        $post = $response->data->publication->post;

        if ($post === null) {
            abort(404);
        }

        return $post;
    }

    public function getPages(): stdClass
    {
        $query = 'query Publication {
            publication(host: "'.$this->host.'") {
                '.StaticPagesFragment::handle().'
            }
        }';

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        $pages = $response->data->publication->staticPages;

        if ($pages === null) {
            abort(404);
        }

        return $pages;
    }

    public function getPage(string $slug): StdClass
    {
        $query = '
        query Publication {
            publication(host: "'.$this->host.'") {
                staticPage(slug: "'.$slug.'") {
                    '.StaticPageFragment::handle().'
                }
            }
        }';

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        $page = $response->data->publication->staticPage;

        if ($page === null) {
            abort(404);
        }

        return $page;
    }

    public function searchPosts(string $term): stdClass
    {
        $query = 'query Publication {
            publication(host: "'.$this->host.'") {
                id
            }
        }';

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        $host = $response->data->publication;

        $query = 'query SearchPostsOfPublication{
          searchPostsOfPublication(
            first: 20
            filter: {
              query: "'.$term.'",
              publicationId: "'.$host->id.'"
            }
          ) {
            edges {
              node {
                  '.StaticPageFragment::handle().'
              }
            }
          }
        }';

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        return $response->data->searchPostsOfPublication;
    }

    protected function getResponse(string $query): object
    {
        $response = Http::post($this->url, [
            'query' => $query,
        ]);

        $data = $response->object();

        if ($data === null) {
            abort(400, 'Hashnode host not found');
        }

        if ($response->failed()) {
            if (isset($data->errors[0])) {
                $message = $data->errors[0]->message;
                $code = $data->errors[0]->extensions->code;

                $error = "Error $code $message";

                abort(400, $error);
            }
        }

        return $data;
    }

    protected function getAfter(): string
    {
        return request()->has('next') ? request()->input('next') : '';
    }
}
