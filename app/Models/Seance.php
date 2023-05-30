<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'date',
    //     'heure_debut',
    //     'heure_fin',
    //     'code_salle',
    //     'code_prof',
    //     'code_matiere',
    //     'code_group'
    // ];


public function salle(){
    return $this->belongsTo(Salle::class,'code_salle');
}
public function prof(){
    return $this->belongsTo(Prof::class,'code_prof');
}
public function matiere(){
    return $this->belongsTo(Matiere::class,'code_matiere');
}
public function group(){
    return $this->belongsTo(Group::class,'code_group');
}
// public function attendance (){
//     $this->hasOne(Attendance::class,'code_attendance');
// }
}
