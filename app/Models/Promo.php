<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo';
    protected $primaryKey = 'id_promo';
    public $timestamps = false;
    protected $fillable = [
        'id_promo',
        'judul',
        'deskripsi',
        'gambar',
        'tanggal_awal_promo',
        'tanggal_akhir_promo',
        'syarat_dan_ketentuan',
    ];
}
