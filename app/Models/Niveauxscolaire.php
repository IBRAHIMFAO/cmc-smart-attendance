<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveauxscolaire extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nom_niveauxscolaire'
    // ];

    public function groups()
    {
        return $this->hasMany(Group::class, 'code_niveauxscolaire');
    }
}
