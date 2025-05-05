<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    //
    use HasFactory;
    protected $table = 'classes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'libelle_Cl'
    ];

    // Mutateur pour forcer le nom en majuscules
    public function setNomAttribute($value)
    {
        $this->attributes['libelle_Cl'] = strtoupper($value);
    }
}
