<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('positions', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->timestamps();

        });

        Schema::create('competences', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->timestamps();

        });


        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->unsignedBigInteger('position');
            $table->index('position');
            $table->foreign('position')->references('id')->on('positions')->onDelete('cascade');
            $table->unsignedBigInteger('competence');
            $table->index('competence');
            $table->foreign('competence')->references('id')->on('competences')->onDelete('cascade');
            $table->string('city');
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
        Schema::dropIfExists('positions');
        Schema::dropIfExists('competences');
        Schema::dropIfExists('users');
    }
};
