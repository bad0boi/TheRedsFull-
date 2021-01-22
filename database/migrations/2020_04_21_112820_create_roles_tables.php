<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Many-many relationship 1.

        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        // Many-many relationship 1.1

        Schema::create('abilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // e.g. edit_article
            $table->string('label')->nullable();
            $table->timestamps();
        });

        // Many-many relationship 1.2 (link-up)

        Schema::create('ability_role', function (Blueprint $table) {
            $table->primary(['role_id', 'ability_id']);

            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('ability_id');
            $table->timestamps();

            $table->foreign('role_id')
                ->references('id')
                ->on('roles') // ref: roles table
                ->onDelete('cascade');

            $table->foreign('ability_id')
                ->references('id')
                ->on('abilities') // ref: abilities table
                ->onDelete('cascade');
        });

        // Many-many relationship 1.3

        Schema::create('role_user', function (Blueprint $table) {
            $table->primary(['user_id', 'role_id']);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users') // ref: abilities table
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on('roles') // ref: roles table
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

    }
}
