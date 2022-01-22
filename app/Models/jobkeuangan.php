<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobkeuangan extends Model
{
    use HasFactory;
    protected $fillable = ['User_Keuangan', 'To_Do_Keuangan', 'Progress_Keuangan', 'Done_Keuangan', 'KomentarManager_Keuangan', 'KomentarAsistenManajer_Keuangan'];
}
