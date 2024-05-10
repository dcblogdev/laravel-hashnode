<?php

namespace Dcblogdev\Hashnode\Fragments;

class PostsFragment
{
    public static function handle(string $first, string $after, string $filter = ''): string
    {
        if (filled($filter)) {
            $params = "first: $first, after: \"$after\", filter: { $filter }";
        } else {
            $params = "first: $first, after: \"$after\"";
        }

        return "posts($params) {
          edges {
            node {
              title
              slug
              brief
              readTimeInMinutes
              publishedAt
              views
              url
              coverImage {
                url
              }
              tags {
                name
                slug
              }
              author ".AuthorFragment::handle().'
            }
          }
          pageInfo {
            endCursor,
            hasNextPage
          }
        }';
    }
}
