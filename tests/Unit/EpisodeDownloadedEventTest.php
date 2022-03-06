<?php

namespace Tests\Unit;

use App\Events\EpisodeDownloaded;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class EpisodeDownloadedEventTest extends TestCase
{

    public function test_episode_downloaded_event()
    {
        Event::fake();

        $eventId = 4;
        $date = "2022-02-23";
        $episodeId = 4;
        $podcastId = 2;
        event(new EpisodeDownloaded($eventId, $date, $episodeId, $podcastId));

        Event::assertDispatched(EpisodeDownloaded::class);
    }
}
