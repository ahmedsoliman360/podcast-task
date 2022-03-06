<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEpisodeDownloadRequest;
use App\Http\Requests\UpdateEpisodeDownloadRequest;
use App\Models\EpisodeDownload;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use PHPUnit\Util\Json;

class EpisodeDownloadController extends Controller
{
    public function getStats(string $date, $podcastId, $episodeId): array
    {
        $date = Carbon::createFromFormat("Y-m-d", $date);
        $start = $date->copy()->subDays(6);

        $period = CarbonPeriod::create($start, $date);

        $stats = array();
        foreach ($period as $date) {
            $date = $date->format('Y-m-d');
            $stats[$date] = EpisodeDownload::getDayCount($date, $episodeId, $podcastId);
            $stats[$date] = is_null($stats[$date])? 0 : $stats[$date];
        }
        return $stats;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEpisodeDownloadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEpisodeDownloadRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EpisodeDownload  $episodeDownload
     * @return \Illuminate\Http\Response
     */
    public function show(EpisodeDownload $episodeDownload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EpisodeDownload  $episodeDownload
     * @return \Illuminate\Http\Response
     */
    public function edit(EpisodeDownload $episodeDownload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEpisodeDownloadRequest  $request
     * @param  \App\Models\EpisodeDownload  $episodeDownload
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEpisodeDownloadRequest $request, EpisodeDownload $episodeDownload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EpisodeDownload  $episodeDownload
     * @return \Illuminate\Http\Response
     */
    public function destroy(EpisodeDownload $episodeDownload)
    {
        //
    }
}
