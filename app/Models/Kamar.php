<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_kamar', 'luas_kamar', 'harga_sewa', 'fasilitas', 'status'];
    protected $table = 'kamar';
}
