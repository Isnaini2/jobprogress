<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobtpb extends Model
{
    use HasFactory;
    protected $fillable = ['User_Tpb', 'To_Do_Tpb', 'Progress_Tpb', 'Done_Tpb', 'KomentarManager_Tpb', 'KomentarAsistenManajer_Tpb'];
}
