<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // Memaksa model membaca tabel 'staffs' di database MySQL
    protected $table = 'staffs';
}