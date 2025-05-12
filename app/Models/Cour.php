<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;

    // Table associée (optionnel si le nom est "cours")
    protected $table = 'cours';

    // Champs autorisés pour le remplissage en masse
    protected $fillable = [
        'titre',
        'imageUrl',
        'description',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function chapitres()
    {
        return $this->hasMany(Chapitre::class, 'cours_id');
    }

}
