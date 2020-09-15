<?php

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
        // $this->call(UserSeeder::class);
        $this->call(ExercisesTableSeeder::class); 
        $this->call(EntriesTableSeeder::class);
        $this->call(WorkoutsTableSeeder::class);
    }
}
