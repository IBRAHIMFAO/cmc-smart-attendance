<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

     protected $fillable = ['code_student','date','status','code_seance'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'code_student');
    }

    public function seance(){
        $this->belongsTo(Seance::class,'code_seance');
    }

    // public function group(){
    //     $this->hasOne(Group::class);
    // }


}

