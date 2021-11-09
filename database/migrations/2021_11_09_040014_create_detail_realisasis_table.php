<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailRealisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_realisasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bukti',255);
            $table->datetime('tanggal');
            $table->integer('pengeluaran');
            $table->binary('file_bukti');
            $table->timestamps();
            $table->foreignId('id_realisasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_realisasis');
    }
}
