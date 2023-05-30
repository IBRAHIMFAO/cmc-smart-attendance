<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','firstName','lastName' ,'codeRFID','code_group','code_tuteur'];

    // public function attendance()
    // {
    //     return $this->belongsTo(Attendance::class);
    // }
    public function group()
    {
        return $this->belongsTo(Group::class, 'code_group');
    }

    public function tuteur(){
        return $this->belongsTo(Tuteur::class,'code_tuteur');
    }
}


