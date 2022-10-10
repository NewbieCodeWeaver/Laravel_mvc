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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->time('hora');
            $table->string('ubicacion',30);
            $table->string('resultado',30)->nullable();

            $table->unsignedBigInteger('equipo_local')->nullable();
            $table->foreign('equipo_local')
            ->references('id')
            ->on('equipos')
            ->onDelete('set null')
            ->onUpdate('set null');

            $table->unsignedBigInteger('equipo_visitante')->nullable();
            $table->foreign('equipo_visitante')
            ->references('id')
            ->on('equipos')
            ->onDelete('set null')
            ->onUpdate('set null');

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
        Schema::dropIfExists('partidos');
    }
};
