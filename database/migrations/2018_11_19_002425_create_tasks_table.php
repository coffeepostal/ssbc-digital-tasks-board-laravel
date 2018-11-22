<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('date');
            $table->string('user_creator', 255);
            $table->string('user_assigned', 255);
            $table->integer('task_type');
            $table->integer('brew_number');
            $table->string('tank_base', 255);
            $table->string('tank_alt', 255);
            $table->text('description');
            $table->boolean('delayable');
            $table->enum('completed', ['incomplete', 'complete']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
