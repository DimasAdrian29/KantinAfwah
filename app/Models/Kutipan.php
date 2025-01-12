<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kutipan extends Model
{
    use HasFactory;

    protected $table = 'kutipan';

    public $timestamps = false;

    protected $fillable = [
        'judul',
        'isi_kutipan',
        'gambar'
    ];
}
