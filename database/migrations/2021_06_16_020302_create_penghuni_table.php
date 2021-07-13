<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghuniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghuni', function (Blueprint $table) {
            $table->id();
            $table->integer('pjid')->nullable();
            $table->string('namaLengkap');
            $table->string('namaPanggilan');
            $table->string('foto')->nullable();
            $table->date('tgllahir');
            $table->string('gender');
            $table->string('agama');
            $table->string('alamat');
            $table->string('notelp');
            $table->string('asalDaerah');
            $table->string('ruang');
            $table->date('tglMasuk');
            $table->date('tglKeluar')->nullable();
            $table->integer('meninggal')->nullable();
            $table->integer('keluar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penghuni');
    }
}
