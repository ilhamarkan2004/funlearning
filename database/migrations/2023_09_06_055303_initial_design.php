<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
         Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('nama');
            $table->integer('stok');
            $table->double('harga');
            $table->enum('tipe', array('gratis', 'berbayar'));
            $table->enum('kategori', array('konvensional', 'apps','bundle'));
            $table->text('deskripsi');
            $table->string('apk')->default('');
            $table->timestamps();
        });
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('produksi');
            $table->string('tahun');
            $table->string('file')->default('');
            $table->string('logo')->default('');
            $table->timestamps();
        });
         Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('message');
            $table->timestamps();
        });

        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->string('no_keranjang');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->double('total_harga')->default(0);
            $table->enum('status', ['Paid', 'Unpaid'])->default('Unpaid');
            $table->timestamps();
        });
        Schema::create('detail_keranjangs', function (Blueprint $table) {
            $table->unsignedBigInteger('keranjang_id');
            $table->unsignedBigInteger('app_id');
            $table->integer('jumlah');
            $table->double('total_harga')->default(0);
            $table->foreign('keranjang_id')->references('id')->on('keranjangs')->onDelete('cascade');
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
            $table->primary(['keranjang_id', 'app_id']);
            $table->timestamps();
        });
        Schema::create('pembelian_apps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('app_id');
            $table->dateTime('tanggal_pembelian');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
        });

        // Tabel transaksis
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('no_keranjang')->unique();
            $table->unsignedBigInteger('user_id');
            $table->double('total_harga')->default(0);
            $table->enum('status', ['Paid', 'Unpaid'])->default('Unpaid');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Tabel detail_transaksis
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('app_id');
            $table->integer('jumlah');
            $table->double('total_harga')->default(0);

            $table->primary(['transaksi_id', 'app_id']);
            $table->timestamps();

            $table->foreign('transaksi_id')->references('id')->on('transaksis')->onDelete('cascade');
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
        });

         Schema::create('ulasans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('rating'); 
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
        Schema::dropIfExists('galeries');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('ulasans');
        Schema::dropIfExists('blogs');
    }
};
