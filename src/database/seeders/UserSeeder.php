<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// check class UserSeeder (UserSeeder.php)
class UserSeeder extends Seeder


// create new seeder php artisan make:seeder SeederName
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // create 10 user factory in db
        \App\Models\User::factory(10)->create();
    }
}
