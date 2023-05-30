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
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('heure_debut');
            $table->time('heure_fin');

            $table->unsignedBigInteger('code_salle');
            $table->unsignedBigInteger('code_prof');
            $table->unsignedBigInteger('code_matiere');
            $table->unsignedBigInteger('code_group');


            $table->foreign('code_group')
            ->references('id')
            ->on('groups')
            ->onDelete('cascade');

            $table->foreign('code_salle')
            ->references('id')
            ->on('salles')
            ->onDelete('cascade');

            $table->foreign('code_prof')
            ->references('id')
            ->on('profs')
            ->onDelete('cascade');

            $table->foreign('code_matiere')
            ->references('id')
            ->on('matieres')
            ->onDelete('cascade');


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
        Schema::dropIfExists('seances');
    }
};
