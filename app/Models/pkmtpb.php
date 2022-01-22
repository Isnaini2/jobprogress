<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pkmtpb extends Model
{
    use HasFactory;
    protected $fillable = ['keterangan_tpb', 'gambar_tpb'];
}
