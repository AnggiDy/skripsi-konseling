<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nrm')->unique();
            $table->string('nama');
            $table->string('fakultas');
            $table->string('prodi');
            $table->integer('angkatan');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_telp', 15);
            $table->string('password');
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
        Schema::dropIfExists('mahasiswa');
    }
}
