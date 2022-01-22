<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobumum extends Model
{
    use HasFactory;
    protected $fillable = ['User_Umum', 'To_Do_Umum', 'Progress_Umum', 'Done_Umum', 'KomentarManager_Umum', 'KomentarAsistenManajer_Umum'];
}
