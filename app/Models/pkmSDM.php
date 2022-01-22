<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pkmSDM extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan_sdm', 'gambar_sdm'];
}
