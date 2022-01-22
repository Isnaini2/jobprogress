<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pkmUmum extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan_umum', 'gambar_umum'];
}
