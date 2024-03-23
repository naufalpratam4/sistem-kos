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

        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nomor_kamar');
            $table->bigInteger('luas_kamar');
            $table->bigInteger('harga_sewa');
            $table->text('fasilitas');
            $table->enum('status', ['kosong', 'isi'])->default('kosong');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar');
    }
};
