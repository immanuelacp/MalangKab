<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_usahas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kategori_usaha');
            $table->string('color');
            $table -> timestamps();

        });
        \App\KategoriUsaha::insert([
           'nama_kategori_usaha' => 'mikro',
            'color' => '#97e2a5',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_usahas');
    }
}
