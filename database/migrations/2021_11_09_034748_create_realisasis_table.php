<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realisasis', function (Blueprint $table) {
            $table->id();
            $table->enum('status_real',['pending','disetujui','ditolak'])->default('pending');
            $table->enum('diajukan', ['yes', 'no'])->default('no');
            $table->text('alasan_ditolak_real')->nullable();
            $table->integer('total_pengeluaran_real');
            $table->timestamps();
            $table->foreignId('id_pengajuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisasis');
    }
}
