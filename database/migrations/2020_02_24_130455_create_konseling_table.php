<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonselingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konseling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_konseling');
            $table->text('isi');
            $table->dateTime('waktu');
            $table->enum('status', ['0', '1']); //0 = private, 1 = publik
            $table->bigInteger('kategori_id')->unsigned();
            $table->bigInteger('mahasiswa_id')->unsigned();

            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
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
        Schema::dropIfExists('konseling');
    }
}
