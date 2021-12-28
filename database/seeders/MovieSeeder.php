<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  Movie::create([
            'name' => "Matrix Revolution",
        ]);
        $data =  Movie::create([
            'name' => "Spider Man Movie",
        ]);
        $data =  Movie::create([
            'name' => "Iron man Movie",
        ]);
    }
}
