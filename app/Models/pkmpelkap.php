<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pkmpelkap extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan_pelkap', 'gambar_pelkap'];
}
