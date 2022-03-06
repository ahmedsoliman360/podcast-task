<?php

namespace Tests\Unit;

use App\Events\EpisodeDownloaded;
use App\Listeners\EpisodeDownloadedListener;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class EpisodeDownloadedListenerTest extends TestCase
{

    public function test_is_attached_to_event()
    {
        Event::fake();
        Event::assertListening(
            EpisodeDownloaded::class,
            EpisodeDownloadedListener::class
        );
    }
}
