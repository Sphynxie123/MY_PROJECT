<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 10 ; $i++) {
        //     \App\Models\User::factory()->create([    
        //     'name' => uniqid(),
        //     'email' => uniqid() . 'example.com',
        //     'password' => bcrypt('password')
        //     ]);
        // }
        $this->call([
            UserSeeder::class,
            CategoriesSeeder::class,
            ProductsSeeder::class,
            // CommentSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
