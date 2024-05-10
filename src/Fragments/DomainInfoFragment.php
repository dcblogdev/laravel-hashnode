<?php

namespace Dcblogdev\Hashnode\Fragments;

class DomainInfoFragment
{
    public static function handle(): string
    {
        return '{
            hashnodeSubdomain
            domain '.DomainStatusFragment::handle().'
            wwwPrefixedDomain '.DomainStatusFragment::handle().'
        }';
    }
}
