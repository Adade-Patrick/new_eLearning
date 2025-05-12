<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;

    // Table associée (optionnelle si le nom respecte la convention)
    protected $table = 'chapitres';

    // Champs autorisés pour l’insertion en masse
    protected $fillable = [
        'titre',
        'description',
        'cours_id',
        'duree',
        'pdfUrl',
    ];

    // Relation avec le modèle Cour
    public function cours()
    {
        return $this->belongsTo(Cour::class, 'cours_id');
    }

    public function sections()
    {
        return $this->hasMany(Section::class, 'chapitres_id');
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }


}
