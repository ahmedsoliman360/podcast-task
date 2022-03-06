<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class EpisodeDownload extends Model
{
    use HasFactory;
    public $timestamps = false;
    public static function getDayCount(string $date,int $episodeId,int $podcastId)
    {
        $stats = EpisodeDownload::where('day', '=', date($date))
            ->where('podcast_Id', '=', $podcastId)
            ->where('episode_Id', '=', $episodeId)
            ->value('count');
        return $stats;
    }
    protected $fillable = [
        "day","eventId","episodeId","podcastId"
    ];
}
