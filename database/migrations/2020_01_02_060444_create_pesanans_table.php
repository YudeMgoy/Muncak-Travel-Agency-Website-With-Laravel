<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('jml_peserta');
            $table->unsignedBigInteger('gunung_id');
            $table->double('total_harga');
            $table->integer('kontak');
            $table->integer('pembayaran');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('gunung_id')
                ->references('id')->on('gunungs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
