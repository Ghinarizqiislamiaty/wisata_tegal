<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata', 30);
            $table->text('alamat', 250);
            $table->string('kategori', 30);
            $table->text('informasi', 600);
            $table->string('fasilitas', 200);
            $table->string('lat', 25);
            $table->string('long', 25);
            $table->string('wilayah', 25);
            $table->string('foto', 50);
            $table->string('vidio', 50);
            $table->timestamps();
            $table->datetime('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisata');
    }
}
