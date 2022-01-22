<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobsdm extends Model
{
    use HasFactory;
    protected $fillable = ['User_sdm', 'To_Do_sdm', 'Progress_sdm', 'Done_sdm', 'KomentarManager_sdm', 'KomentarAsistenManajer_sdm'];
}
