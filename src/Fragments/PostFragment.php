<?php

namespace Dcblogdev\Hashnode\Fragments;

class PostFragment
{
    public static function handle(string $slug): string
    {
        return "post(slug: \"$slug\") {
          id
          title
          slug
          canonicalUrl
          content ".ContentFragment::handle().'
          readTimeInMinutes
          publishedAt
          url
          responseCount
          coverImage {
            url
          }
          tags {
            name
            slug
          }
          author '.AuthorFragment::handle().'
          ogMetaData {
            image,
          }
          seo {
            title,
            description
          }
        }';
    }
}
