<?php

namespace Tests\Unit;

use Tests\TestCase;

class ApiTest extends TestCase
{

    public function test_api_json_response()
    {
        $response = $this->getJson('/api/EpisodeDownload/2022-02-26/podcast/2/episode/4');

        $response
            ->assertStatus(200)
            ->assertExactJson([
        "2022-02-20"=> 0,
        "2022-02-21"=> 0,
        "2022-02-22"=> 0,
        "2022-02-23"=> 4,
        "2022-02-24"=> 0,
        "2022-02-25"=> 3,
        "2022-02-26"=> 6
        ]);
    }
}
