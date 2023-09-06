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
            $table->integer('basic_id')->after('bagian')->default(0);
            $table->integer('spandex_id')->after('basic_id')->default(0);
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
            //
        });
    }
};
