<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'namaBarang',
        'jenisBarang',
        'stock',
        'status',
        'hargaSatuan',
    ];
}
