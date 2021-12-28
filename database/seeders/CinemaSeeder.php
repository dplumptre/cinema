<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cinema;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  Cinema::create([
            'name' => "cinema-ikeja",
            'location' => 'Ikeja'
        ]);
        $data =  Cinema::create([
            'name' => "cinema-lekki",
            'location' => 'Lekki'
        ]);
        $data =  Cinema::create([
            'name' => "cinema-maryland",
            'location' => 'Maryland'
        ]);
    }
}
