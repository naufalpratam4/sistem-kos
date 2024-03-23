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
        Schema::disableForeignKeyConstraints();

        Schema::create('penghuni', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penghuni')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('no_hp')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->date('tgl_keluar')->nullable();
            $table->unsignedBigInteger('alamat_jalan');
            $table->unsignedBigInteger('kamar');
            $table->unsignedBigInteger('pembayaran');
            $table->foreign('alamat_jalan')->references('id')->on('alamat');
            $table->foreign('kamar')->references('id')->on('kamar');
            $table->foreign('pembayaran')->references('id')->on('pembayaran');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghuni');
    }
};
