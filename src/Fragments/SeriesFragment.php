<?php

namespace Dcblogdev\Hashnode\Fragments;

class SeriesFragment
{
    public static function handle(): string
    {
        return '{
            id
            name
            createdAt
            description {
                html,
                markdown
                text
            }
            coverImage
            cuid
            slug
            sortOrder
            author '.AuthorFragment::handle().'
        }';
    }
}
