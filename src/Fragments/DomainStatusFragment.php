<?php

namespace Dcblogdev\Hashnode\Fragments;

class DomainStatusFragment
{
    public static function handle(): string
    {
        return '{
            host
            ready
            status
            verifiedAt
        }';
    }
}
