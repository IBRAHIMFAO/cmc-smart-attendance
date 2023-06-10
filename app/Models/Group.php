<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'nom_group',
        'description',
        'code_niveauxscolaire',
        'code_filiere'
    ];

    public function niveauxscolaire()
    {
        return $this->belongsTo(Niveauxscolaire::class, 'code_niveauxscolaire');
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'code_filiere');
    }

    public function student()
    {
        return $this->hasMany(Student::class,'code_student');
    }


    public function seances()
    {
        return $this->hasOne(Seance::class, 'code_group');
    }




}
