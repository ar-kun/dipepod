<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umkmcategories_id');
            $table->string('slug')->unique();
            $table->string('nama_product');
            $table->string('nama_penjual');
            $table->text('alamat_penjual');
            $table->string('foto_product')->nullable();
            $table->string('contact');
            $table->string('link_shopee')->nullable();
            $table->string('link_tokopedia')->nullable();
            $table->string('link_lainnya')->nullable();
            $table->string('harga_minimum');
            $table->string('harga_maximum');
            $table->text('deskripsi');
            $table->string('kondisi_penyimpanan')->nullable();
            $table->string('berat_produk')->nullable();
            $table->string('expired')->nullable();
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
        Schema::dropIfExists('umkms');
    }
}