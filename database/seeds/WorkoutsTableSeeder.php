<?php

use Illuminate\Database\Seeder;
use App\Workout;

class WorkoutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = storage_path('/data/ExercisesDB.csv');
        $file = fopen($filename, "r");
        
        while ( ($data = fgetcsv($file, 200, ",")) !==FALSE ) {
            if ($data[0] == "Workout") // ignore line 1
               continue;

            $workoutDate = date("Y-m-d", strtotime(str_replace("/","-",  $data[0])));
            $workout = new Workout();
            $workout->workout_date = $workoutDate;
            $workout->save();
        }

        fclose($file);
    }
}
