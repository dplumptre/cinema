<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user =  User::create([
            'name' => $faker->name,
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make("cinema101"), // cinema101
            'remember_token' => Str::random(10),
          ]);
          $user->markEmailAsVerified();
    }
}
