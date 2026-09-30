<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    // Memaksa model ini membaca tabel 'facilities' di database
    protected $table = 'facilities';
}