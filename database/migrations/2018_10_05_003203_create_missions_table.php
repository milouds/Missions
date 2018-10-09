<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaire', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_debut');
            $table->string('heure_debut');
            $table->string('heure_fin');
            //$table->rememberToken();
            //$table->timestamps();
        });
        Schema::create('localisation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adresse');
            $table->string('latitude');
            $table->string('longitude');
            //$table->rememberToken();
            //$table->timestamps();
        });

        Schema::create('photo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('urlImage');
            $table->string('titre');
            $table->string('uploader');
            $table->date('time_and_date');
            //$table->rememberToken();
            //$table->timestamps();
        });

        Schema::create('note', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contenu');
            $table->date('date_pub');
            $table->string('note_owner');
        });

        Schema::create('mission', function (Blueprint $table) {
            $table->increments('id');
            $table->text('workorder');
            $table->text('description');
            $table->text('priority');
            $table->text('statut');
            $table->text('titre');
            $table->integer('note_id')->unsigned();
            $table->integer('horaire_id')->unsigned();
            $table->text('photo_id')->unsigned();
            $table->text('local_id')->unsigned();
            $table->foreign('note_id')->references('id')->on('note')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('horaire_id')->references('id')->on('horaire')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('photo_id')->references('id')->on('photo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('local_id')->references('id')->on('localisation')->onDelete('cascade')->onUpdate('cascade');
            //$table->rememberToken();
            //$table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
