<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'libelle_cat',
    ];


    public function cours()
    {
        return $this->hasMany(Cour::class, 'categorie_id');
    }
}
