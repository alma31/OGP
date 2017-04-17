<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('age');
            $table->string('sexe');
            $table->string('numrue');
            $table->string('rue');
            $table->string('cp');
            $table->string('ville');
            $table->string('email')->unique();
            $table->string('tel');
            $table->string('ffsnw');
            $table->string('nht');
            $table->string('nhr');
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
        Schema::dropIfExists('clients');
    }
}