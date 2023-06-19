<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Category::create([
        //     'name'=>'Mahnoor Sajjad',
        //     'ordering'=>'33',

        // ]);
        // for($i=1; $i<6;$i++){
        //     Category::create([
        //         'name'=>'Mahnoor'.$i,
        //         'ordering'=>'22'.$i,
        //     ]);
        // }
         // Create a single user
        //  User::factory()->create();

         // Create multiple users
         User::factory()->count(10)->create();
    }
}
