<?php

namespace Dcblogdev\Hashnode\Fragments;

class PublicationFragment
{
    public static function handle(string $host): string
    {
        return '{
            publication(host: "'.$host.'") {
                id
                title
                displayTitle
                descriptionSEO
                isTeam
                isHeadless
                followersCount
                url
                canonicalURL
                favicon
                headerColor
                metaTags
                about '.ContentFragment::handle().'
                author '.AuthorFragment::handle().'
                integrations '.IntegrationsFragment::handle().'
                preferences '.PrefrencesFragment::handle().'
                imprintV2 '.ContentFragment::handle().'
                links '.LinksFragment::handle().'
                domainInfo '.DomainInfoFragment::handle().'
            }
        }';
    }
}
