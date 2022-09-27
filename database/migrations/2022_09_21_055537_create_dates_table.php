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
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->date('date_start');
            $table->date('date_end');
            $table->time('time');
            $table->foreign('id_produk')->references('tour_offline_id')->on('tour_offline');
            $table->foreign('id_produk')->references('virtual_tour_id')->on('virtual_tour');
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
        Schema::dropIfExists('dates');
    }
};
