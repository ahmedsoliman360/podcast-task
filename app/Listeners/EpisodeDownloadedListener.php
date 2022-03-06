<?php

namespace App\Listeners;

use App\Events\EpisodeDownloaded;
use App\Models\EpisodeDownload;
use Illuminate\Support\Facades\DB;
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
     * @param EpisodeDownloaded $event
     * @return void
     */
    public function handle(EpisodeDownloaded $event)
    {
        $count = EpisodeDownload::getDayCount($event->date, $event->episodeId, $event->podcastId);
        $count = $count + 1;
        DB::table('episode_downloads')
            ->updateOrInsert(
                [
                    'day' => $event->date,
                    'episode_Id' => $event->episodeId,
                    'podcast_Id' => $event->podcastId
                ],
                ['count' => $count]
            );
        return $count;
    }
}
