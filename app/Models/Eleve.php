<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $table = 'eleves';
    protected $primaryKey = 'idEleves';

    protected $fillable = [
        'dateNaissance',
        'telephone',
        'libelle_C',
        'libelle_A',
        'libelle_Cl',
        'idUsers',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUsers', 'idUsers');
    }

    public function cycle()
    {
        return $this->belongsTo(Cycle::class, 'libelle_C', 'libelle_C');
    }

    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'libelle_A', 'libelle_A');
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'libelle_Cl', 'libelle_Cl');
    }
}
