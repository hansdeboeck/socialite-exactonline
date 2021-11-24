<?php
namespace DeboeckDEV\SocialiteExactonline;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ExactonlineExtendsSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'exactonline', Provider::class
        );
    }
}
