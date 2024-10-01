<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeHoraColumnTypeInPartidosTable extends Migration
{
    public function up()
    {
        Schema::table('partidos', function (Blueprint $table) {
            $table->string('hora')->change();
        });
    }

    public function down()
    {
        Schema::table('partidos', function (Blueprint $table) {
            $table->time('hora')->change();
        });
    }
}
