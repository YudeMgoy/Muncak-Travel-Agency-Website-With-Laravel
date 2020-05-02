<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGunungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gunungs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('wilayah_id');
            $table->string('nama');
            $table->text('keterangan');
            $table->double('harga');
            $table->string('image');
            $table->string('lokasi');
            $table->integer('jml_pesanan');
            $table->timestamps();

            $table->foreign('wilayah_id')
                ->references('id')->on('wilayahs')
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
        Schema::dropIfExists('gunungs');
    }
}
