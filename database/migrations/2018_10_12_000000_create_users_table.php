<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawans', function (Blueprint $table) {
            $table->increments('id');
             $table->string('namaDepan');
            $table->string('namaBelakang');
            $table->date('tanggalLahir');
            $table->string('jenisKelamin');
            $table->string('profesi');
            $table->string('noHp');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kodepos');
            $table->string('kota');
            $table->string('provinsi');

            $table->unsignedInteger('idTim')->nullable();
            $table->foreign('idTim')->references('id')->on('tims');
            $table->rememberToken();
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
        Schema::dropIfExists('relawans');
    }
}
