<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_dev_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pesanan_dev_id');
            $table->string('kode')->nullable();
            $table->string('nama')->nullable();
            $table->string('gramasi')->nullable();
            $table->string('lebar')->nullable();
            $table->string('warna')->nullable();
            $table->string('kategori_warna')->nullable();
            $table->integer('qty')->nullable();
            $table->float('qty_act')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('subtotal')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_dev_details');
    }
};
