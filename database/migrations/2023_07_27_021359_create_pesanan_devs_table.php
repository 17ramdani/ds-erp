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
        Schema::create('pesanan_devs', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->bigInteger('customer_id');
            $table->bigInteger('jenis_kain_id');
            $table->bigInteger('tipe_kain_id');
            $table->string('warna')->nullable();
            $table->string('gramasi')->nullable();
            $table->string('lebar')->nullable();
            $table->integer('qty')->default(0);
            $table->text('keterangan')->nullable();
            $table->text('images')->nullable();
            $table->string('status')->default('Draft');
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
        Schema::dropIfExists('pesanan_devs');
    }
};
