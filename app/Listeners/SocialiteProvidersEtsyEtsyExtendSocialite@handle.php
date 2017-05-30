<?php

namespace App\Listeners;

use App\Events\SocialiteProvidersManagerSocialiteWasCalled;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EtsyExtendSocialite
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SocialiteProvidersManagerSocialiteWasCalled  $event
     * @return void
     */
    public function handle(SocialiteWasCalled $event)
    {
        //
    }
}
