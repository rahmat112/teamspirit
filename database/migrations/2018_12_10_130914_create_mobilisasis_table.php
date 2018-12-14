<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilisasis', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggalMulai');
            $table->date('tanggalBerakhir');
            $table->string('laporan');
            $table->unsignedInteger('idPosko')->nullable();
            $table->unsignedInteger('idTim')->nullable();
            $table->foreign('idTim')->references('id')->on('tims');
            $table->foreign('idPosko')->references('id')->on('poskos');
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
        Schema::dropIfExists('mobilisasis');
    }
}
