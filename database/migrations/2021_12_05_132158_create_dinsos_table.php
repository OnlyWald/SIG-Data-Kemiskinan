<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinsos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kota');
            $table->string('nama_dinsos');
            $table->double('longitude');
            $table->double('latitude');
            $table->double('jumlah_penduduk');
            $table->double('jumlah_penduduk_miskin');
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
        Schema::dropIfExists('dinsos');
    }
}
