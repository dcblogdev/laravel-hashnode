<?php

namespace Dcblogdev\Hashnode;

use Dcblogdev\Hashnode\Fragments\AuthorFragment;
use Dcblogdev\Hashnode\Fragments\ContentFragment;
use Dcblogdev\Hashnode\Fragments\PostFragment;
use Dcblogdev\Hashnode\Fragments\PostsFragment;
use Dcblogdev\Hashnode\Fragments\PublicationFragment;
use Dcblogdev\Hashnode\Fragments\StaticPageFragment;
use Dcblogdev\Hashnode\Fragments\StaticPagesFragment;
use Illuminate\Support\Facades\Http;
use InvalidArgumentException;
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

        $posts = $response->data->publication->posts;

        if ($posts->edges === []) {
            abort(404);
        }

        return $posts;
    }

    public function getPostsBySeries(string $slug): StdClass
    {
        $query = 'query Publication {
            publication(host: "'.$this->host.'") {
                series(slug: "'.$slug.'") {
                    id
                    name
                    createdAt
                    description '.ContentFragment::handle().'
                    coverImage
                    author '.AuthorFragment::handle().'
                    cuid
                    slug
                    sortOrder
                    '.PostsFragment::handle($this->perPage, $this->getAfter()).'
                }
            }
        }';

        $response = $this->getResponse($query);

        if (! property_exists($response, 'data')) {
            abort(400, 'Data not found in response');
        }

        $series = $response->data->publication->series;

        if ($series === null) {
            abort(404);
        }

        return $series;
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
        $query = 'query SearchPostsOfPublication{
          searchPostsOfPublication(
            first: 20
            filter: {
              query: "'.$term.'",
              publicationId: "'.$this->getHostId().'"
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

    public function newsletterSubscribe(string $email): string
    {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid email format');
        }

        $input = [
            'publicationId' => $this->getHostId(),
            'email' => $email,
        ];

        $query = <<<'GRAPHQL'
        mutation SubscribeToNewsletter($input: SubscribeToNewsletterInput!) {
          subscribeToNewsletter(input: $input) {
            status
          }
        }
        GRAPHQL;

        $response = Http::post($this->url, [
            'query' => $query,
            'variables' => [
                'input' => $input,
            ],
        ]);

        $result = $response->object();

        if ($result === null) {
            abort(400, 'Hashnode host not found');
        }

        if (isset($result->errors[0])) {
            return $result->errors[0]->message;
        }

        return $result->data->subscribeToNewsletter->status;
    }

    public function getHostId(): string
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

        return $response->data->publication->id;
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
