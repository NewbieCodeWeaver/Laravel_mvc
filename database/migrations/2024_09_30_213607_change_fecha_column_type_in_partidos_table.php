<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFechaColumnTypeInPartidosTable extends Migration
{
    public function up()
    {
        Schema::table('partidos', function (Blueprint $table) {
            $table->string('fecha')->change();
        });
    }

    public function down()
    {
        Schema::table('partidos', function (Blueprint $table) {
            $table->date('fecha')->change();
        });
    }
}
