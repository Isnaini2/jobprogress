<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pkmkeuangan extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan_keuangan', 'gambar_keuangan'];
}
