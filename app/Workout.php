<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    //
    public function entry() { 
        return $this->belongsTo('App\Entry','workout_id'); 
    }
}
