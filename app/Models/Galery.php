<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    protected $table = 'galery';
    protected $primaryKey = 'id_galery';
    public $timestamps = false;
    protected $fillable = [
        'id_galery',
        'judul_galery',
        'deskripsi',
        'foto',
        'tanggal',
    ];
}
