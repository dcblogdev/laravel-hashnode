<?php

namespace Dcblogdev\Hashnode\Fragments;

class ContentFragment
{
    public static function handle(): string
    {
        return '{
            html
            markdown
            text
        }';
    }
}
