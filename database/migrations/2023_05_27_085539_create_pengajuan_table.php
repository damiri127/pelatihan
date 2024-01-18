<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->increments('id_dokumen');
            $table->foreignId('id_ormawa');
            $table->foreignId('id_kemahasiswaan');
            $table->string('nama_ormawa', 50);
            $table->string('nama_kegiatan', 50);
            $table->date('tanggal_pelaksanaan');
            $table->string('keterangan');
            $table->string('dokumen');
            $table->enum('status', ['pending', 'disetujui', 'ditolak']);
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
        Schema::dropIfExists('pengajuan');
    }
}
