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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code_student');
            // $table->unsignedBigInteger('code_seance');
            $table->date('date');
            $table->enum('status', ['present', 'tardy', 'absent']);

            $table->foreign('code_student')
                    ->references('id')
                    ->on('students')
                    ->onDelete('cascade');

            // $table->foreign('code_seance')
            //         ->references('id')
            //         ->on('seances')
            //         ->onDelete('cascade');



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
        Schema::dropIfExists('attendances');
    }
};
