<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bantu extends Model
{
    use HasFactory;
    protected $table = 'tb_bantuan';
    // protected $primaryKey = 'id_bantuan';
    protected $fillable = [
        'groups',
        'bantuan',
        'feedback',
        'pengguna',
        'penjaga',
    ];
    

}
