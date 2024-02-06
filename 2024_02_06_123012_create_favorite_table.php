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
        Schema::create('favorite', function (Blueprint $table) {
            $table->id();
             // Ajout de la colonne user_id
             $table->unsignedBigInteger('user_id');

             // Création de la clé étrangère
             $table->foreign('user_id')->references('id')->on('users');
              // Ajout de la colonne publication_id
              $table->unsignedBigInteger('publication_id');

              // Création de la clé étrangère
              $table->foreign('publication_id')->references('id')->on('publications');
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
        Schema::dropIfExists('favorite');
    }
};
