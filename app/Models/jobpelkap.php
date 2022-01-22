<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobpelkap extends Model
{
    use HasFactory;
    protected $fillable = ['User_Pelkap', 'To_Do_Pelkap', 'Progress_Pelkap', 'Done_Pelkap', 'KomentarManager_Pelkap', 'KomentarAsistenManajer_Pelkap'];
}
