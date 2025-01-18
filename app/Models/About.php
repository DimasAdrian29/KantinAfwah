<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    public $timestamps = false;

    protected $fillable = [
        'email',
        'alamat',
        'kontak',
        'gambar_kantin',
        'deskripsi_kantin',
        'gambar_pemilik',
        'deskripsi_pemilik'
    ];
}
