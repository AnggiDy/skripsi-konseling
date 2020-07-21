<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('waktu');
            $table->string('isi_komentar');
            $table->bigInteger('mahasiswa_id')->unsigned();
            $table->bigInteger('artikel_id')->unsigned();

            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('artikel_id')->references('id')->on('artikel');
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
        Schema::dropIfExists('komentar');
    }
}
