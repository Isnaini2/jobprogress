<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pkmIT extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan_IT', 'gambar_IT'];
}
