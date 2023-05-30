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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('firstName', 30);
            $table->string('lastName', 30);
            $table->string('codeRFID')->unique()->nullable();

            $table->unsignedBigInteger('code_group'); // Add the foreign key column

            $table->foreign('code_group')
            ->references('id')
            ->on('groups') // Specify the referenced table using 'on()' method
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
        Schema::dropIfExists('students');
    }
};
