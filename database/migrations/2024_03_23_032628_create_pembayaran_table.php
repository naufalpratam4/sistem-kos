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

        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('metode_pembayaran');
            $table->foreign('metode_pembayaran')->references('pembayaran')->on('penghuni');
            $table->date('tanggal_pembayaran');
            $table->bigInteger('jumlah_pembayaran');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
