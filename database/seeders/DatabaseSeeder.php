<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\Course;
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
         \App\Models\User::factory(10)->create();

         Course::factory(15)->create();
         Chapter::factory(90)->create();
    }
}
