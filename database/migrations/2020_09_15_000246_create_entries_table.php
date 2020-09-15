<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_id')->index(); //workout_date
            $table->unsignedBigInteger('exercise_id')->index(); //name
            $table->integer('repetitions')->nullable();
            $table->timestamps();

            $table->foreign('workout_id')
            ->references('id')->on('workouts')
            ->onDelete('cascade');

            $table->foreign('exercise_id')
            ->references('id')->on('exercises')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
