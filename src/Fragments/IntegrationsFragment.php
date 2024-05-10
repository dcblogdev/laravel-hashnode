<?php

namespace Dcblogdev\Hashnode\Fragments;

class IntegrationsFragment
{
    public static function handle(): string
    {
        return '{
            fbPixelID
            fathomSiteID
            fathomCustomDomainEnabled
            fathomCustomDomain
            hotjarSiteID
            matomoSiteID
            matomoURL
            gaTrackingID
            plausibleAnalyticsEnabled
            wmPaymentPointer
            umamiWebsiteUUID
            umamiShareId
            gTagManagerID
        }';
    }
}
