<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */

    public function run()
    {
        $this->call(SupplierSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RestaurantSeeder::class);

    }
}




        // \App\Models\User::factory(10)->create();

        // Food::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Food::factory()->count(50)->create();
        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);
