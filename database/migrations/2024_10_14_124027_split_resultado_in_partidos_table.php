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
        Schema::table('partidos', function (Blueprint $table) {
            $table->integer('goles_local')->default(0);
            $table->integer('goles_visitante')->default(0);
            $table->dropColumn('resultado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partidos', function (Blueprint $table) {
            $table->string('resultado')->nullable();
            $table->dropColumn('goles_local');
            $table->dropColumn('goles_visitante');
        });
    }
};
