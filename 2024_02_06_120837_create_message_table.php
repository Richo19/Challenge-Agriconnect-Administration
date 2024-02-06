<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->string('contenu');
            // Ajout de la colonne expediteur_id
            $table->unsignedBigInteger('expediteur_id');

            // Création de la clé étrangère
            $table->foreign('expediteur_id')->references('id')->on('users');
              // Ajout de la colonne destinateur_id
            $table->unsignedBigInteger('destinateur_id');

            // Création de la clé étrangère
            $table->foreign('destinateur_id')->references('id')->on('users');
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
        Schema::dropIfExists('message');
    }
};
