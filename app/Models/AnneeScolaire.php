<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnneeScolaire extends Model
{
    use HasFactory;
    protected $table = 'annee_scolaires';
    // protected $primaryKey = 'idAnnee_scolaires';
    protected $primaryKey = 'id';


    protected $fillable = [
        'libelle_A'
    ];
}
