<?php

use Illuminate\Database\Seeder;
use App\Entry;

class EntriesTableSeeder extends Seeder
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
        $data_array = array();
        $i=1;
        while ( ($data = fgetcsv($file, 200, ",")) !==FALSE ) {
            if ($data[0] == "Workout")
               continue;
            
            $n = 1;
            $x = 1;
            foreach ($data as $key=>$val){
                if ($n == 6){
                    $n = 1;
                    $x = 1;
                }
                    
                $entry = new Entry();
                $entry->workout_id = intval($i);
                $entry->exercise_id = intval($x);
                $entry->repetitions = $data[$n];
                $entry->save();
                $x++;
                $n++;
            }
            $i++;
        }
        fclose($file);
    }
}