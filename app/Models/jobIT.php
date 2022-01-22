<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobIT extends Model
{
    use HasFactory;
    protected $fillable = ['User_IT', 'To_Do_IT', 'Progress_IT', 'Done_IT', 'KomentarManager_IT', 'KomentarAsistenManajer_IT'];
}
