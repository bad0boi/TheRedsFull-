<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSquadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('squads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('age');
            $table->text('nationality');
            $table->text('position');
            $table->text('height');
            $table->integer('jersey');
            $table->integer('goals');
            $table->integer('assists');
            $table->text('social');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('squads');
    }
}
