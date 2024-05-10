<?php

namespace Dcblogdev\Hashnode\Fragments;

class PrefrencesFragment
{
    public static function handle(): string
    {
        return '{
            logo
            darkMode {
                enabled
                logo
            }
            enabledPages { 
                badges
                newsletter
                members
            }
            navbarItems {
                id
                label
                url
                type
                series '.SeriesFragment::handle().'
                page '.PageFragment::handle().'
            layout
            disableFooterBranding
            isSubscriptionModalDisabled
        }';
    }
}
