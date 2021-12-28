<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\ShowingTimes;
use App\Models\Cinema;

class ShowTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $moviez = Movie::first();
        $cinema = Cinema::first();
        $movie = Movie::find($moviez->id);
        $movie->cinemas()->attach($cinema->id,["showing_time" =>date("Y-m-d H:i:s", strtotime('now'))] );


    }
}
