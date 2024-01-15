<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Iot extends Model
{
    use HasFactory;

    protected $table = 'tb_sensor';
    protected $primarykey = 'id';
    protected $fillable = ['object','sos'];
}
