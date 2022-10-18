<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('kategori');
            $table->string('mahasiswa');
            $table->string('nim');
            $table->string('segmen_customer');
            $table->string('key_patner');
            $table->string('nilai_tkt');
            $table->string('gambaran_pesaingan');
            $table->string('unique_selling_point');
            $table->string('foto_produk');
            $table->string('video_produk');
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
        Schema::dropIfExists('produks');
    }
}
