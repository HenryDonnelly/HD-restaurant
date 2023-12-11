<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        Restaurant::factory()
        ->times(3)
        ->create();

        foreach(Food::all() as $food)
        {
            $restaurants = Restaurant::inRandomOrder()->take(rand(1,3))->pluck('id');
            $food->restaurants()->attach($restaurants);
        }
    }
}
