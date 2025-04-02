<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MatchNew;
use Carbon\Carbon;

class MatchSeeder extends Seeder
{
    public function run()
    {
        MatchNew::create([
            'home_team' => 'Manchester United',
            'away_team' => 'Liverpool',
            'league' => 'Premier League',
            'stadium' => 'Old Trafford',
            'start_time' => Carbon::now()->addHours(1),
            'home_score' => null,
            'away_score' => null,
        ]);
    }
}
