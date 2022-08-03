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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',45);
            $table->string('entrenador',30)->nullable();
            $table->tinyInteger('division')->nullable();
            $table->string('estadio',30)->nullable();

            $table->unsignedBigInteger('club_id')->nullable();
            $table->foreign('club_id')
            ->references('id')->on('clubs')
            ->onDelete('set null');

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
        Schema::dropIfExists('equipos');
    }
};