<?php

namespace Dcblogdev\Hashnode\Fragments;

class StaticPageFragment
{
    public static function handle(): string
    {
        return '
            id
            title
            slug
            content '.ContentFragment::handle().'
            ogMetaData {
                image,
            }
            seo {
                title,
                description
            }
        ';
    }
}
