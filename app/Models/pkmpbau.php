<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pkmpbau extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan_pbau', 'gambar_pbau'];
}
