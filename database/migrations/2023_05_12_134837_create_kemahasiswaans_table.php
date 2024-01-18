<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemahasiswaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemahasiswaan', function (Blueprint $table) {
            $table->increments('id_kemahasiswaan');
            $table->foreignId('id_users');
            $table->char('nip', 20);
            $table->string('nama', 30);
            $table->string('alamat', 100);
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
        Schema::dropIfExists('kemahasiswaans');
    }
}
