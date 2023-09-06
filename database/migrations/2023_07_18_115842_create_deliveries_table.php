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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('no_sj');
            $table->integer('pesanan_id');
            $table->string('jenis_faktur')->nullable();
            $table->string('status_sj')->nullable();
            $table->string('armada')->nullable();
            $table->string('status')->nullable();
            $table->string('no_resi')->nullable();
            $table->string('file_resi')->nullable();
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
        Schema::dropIfExists('deliveries');
    }
};
