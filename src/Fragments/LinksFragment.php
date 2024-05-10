<?php

namespace Dcblogdev\Hashnode\Fragments;

class LinksFragment
{
    public static function handle(): string
    {
        return '{
            twitter
            instagram
            github
            website
            hashnode
            youtube
            dailydev
            linkedin
            mastodon
        }';
    }
}
