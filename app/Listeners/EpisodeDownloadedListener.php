<?php

namespace App\Listeners;

use App\Events\EpisodeDownloaded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EpisodeDownloadedListener
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
     * @param  \App\Events\EpisodeDownloaded  $event
     * @return void
     */
    public function handle(EpisodeDownloaded $event)
    {
        //
    }
}
