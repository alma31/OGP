<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('sexe');
            $table->integer('numrue');
            $table->string('rue');
            $table->integer('cp');
            $table->string('ville');
            $table->string('email')->unique();
            $table->integer('tel');
            $table->string('ffsnw');
            $table->integer('nht');
            $table->integer('nhr');
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
        Schema::dropIfExists('users');
    }
}
