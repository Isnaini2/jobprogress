<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobpbau extends Model
{
    use HasFactory;
    protected $fillable = ['User_Pbau', 'To_Do_Pbau', 'Progress_Pbau', 'Done_Pbau', 'KomentarManager_Pbau', 'KomentarAsistenManajer_Pbau'];
}
