<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_filiere',
        // 'label'
    ];

    public function groups()
    {
        return $this->hasMany(Group::class, 'code_filiere');
    }
}
