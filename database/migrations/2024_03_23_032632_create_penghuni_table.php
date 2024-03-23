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
            $table->bigInteger('alamat')->nullable();
            $table->bigInteger('no_hp')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->date('tgl_keluar')->nullable();
            $table->bigInteger('kamar')->nullable();
            $table->bigInteger('pembayaran');
            $table->foreign('kamar')->references('id')->on('kamar')->nullable();
            $table->foreign('alamat')->references('id')->on('alamat')->nullable();
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
