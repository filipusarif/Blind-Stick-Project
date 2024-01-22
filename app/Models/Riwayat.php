<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $table = 'tb_riwayat'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['nama', 'latitude', 'longitude', 'model'];
}
