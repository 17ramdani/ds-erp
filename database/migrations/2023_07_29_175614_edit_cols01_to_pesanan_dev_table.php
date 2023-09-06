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
        Schema::table('pesanan_devs', function (Blueprint $table) {
            $table->string('jenis_kain')->after('jenis_kain_id')->nullable();
            $table->string('tipe_kain')->after('tipe_kain_id')->nullable();
            $table->text('catatan_admin')->after('status')->nullable();
            $table->integer('total')->default(0)->after('catatan_admin')->nullable();
            $table->integer('ongkir')->default(0)->after('total')->nullable();
            $table->integer('grand_total')->default(0)->after('ongkir')->nullable();
            $table->integer('dp')->default(0)->after('grand_total')->nullable();
            $table->string('bukti_dp')->after('dp')->nullable();
            $table->integer('pelunasan')->default(0)->after('bukti_dp')->nullable();
            $table->string('bukti_pelunasan')->after('pelunasan')->nullable();
            $table->integer('sisa_pembayaran')->default(0)->after('bukti_pelunasan')->nullable();
        });
        Schema::table('pesanan_dev_accs', function (Blueprint $table) {
            $table->string('accessories')->after('accessories_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesanan_dev', function (Blueprint $table) {
            //
        });
    }
};
