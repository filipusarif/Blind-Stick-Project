<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;
    protected $table = 'tb_kritik';
    protected $fillable = ['email', 'kritik'];
}
