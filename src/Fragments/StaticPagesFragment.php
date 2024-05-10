<?php

namespace Dcblogdev\Hashnode\Fragments;

class StaticPagesFragment
{
    public static function handle(): string
    {
        return 'staticPages(first: 10) {
          edges {
            node {
              title
              slug
            }
          }
        }';
    }
}
