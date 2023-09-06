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
        Schema::create('returs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->bigInteger('pesanan_id');
            $table->string('jenis_retur');
            $table->string('alasan_retur');
            $table->text('deskripsi')->nullable();
            $table->text('photos')->nullable();
            $table->string('status')->nullable()->default('Draft');
            $table->date('tanggal_kirim');
            $table->integer('ongkir')->default(0);
            $table->integer('diskon')->default(0);
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('returs');
    }
};
