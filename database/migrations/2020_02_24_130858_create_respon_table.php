<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('waktu');
            $table->text('isi_respon');
            $table->enum('jenis_responden', ['konselor', 'mahasiswa']);
            $table->bigInteger('responden_id')->unsigned();
            $table->bigInteger('konseling_id')->unsigned();

            $table->foreign('konseling_id')->references('id')->on('konseling');
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
        Schema::dropIfExists('respon');
    }
}
