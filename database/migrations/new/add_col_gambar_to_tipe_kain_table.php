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
        Schema::table('tipe_kain', function (Blueprint $table) {
            $table->string('gambar_2')->nullable()->after('gambar');
            $table->string('gambar_3')->nullable()->after('gambar_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipe_kain', function (Blueprint $table) {
            $table->dropColumn('gambar_2');
            $table->dropColumn('gambar_3');
        });
    }
};