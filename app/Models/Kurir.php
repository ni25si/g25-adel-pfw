<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_kurir';

    protected $fillable = [
        'nama_kurir',
        'nomor_hp',
        'plat_kendaraan',
        'status',
    ];
}