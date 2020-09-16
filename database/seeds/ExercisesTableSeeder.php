<?php

use Illuminate\Database\Seeder;
use App\Exercise;

class ExercisesTableSeeder extends Seeder
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

        while ( ($data = fgetcsv($file, 200, ",")) !==FALSE ) {
            $data_array[] = $data;
        }
        $rows = array();
        $i = 0;
        $len = count($data_array);
        foreach ($data_array as $items) {
            if ($i == 0) {
                $array_key = $items; // get first as name
            } else if ($i == 1) {
                $array_value = $items; // get last element as current
                $rows = array_combine( $array_key, $array_value );
            }

            $i++;
        }

        unset($rows['Workout']);
        foreach( $rows as $key => $value ){ 
            $exercise = new Exercise();
            $exercise->name = $key;
            $exercise->current = intval($value);
            $exercise->save();
        }
    }
}
