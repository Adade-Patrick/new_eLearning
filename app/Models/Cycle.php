<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    use HasFactory;

    protected $table = 'cycles';

    // protected $primaryKey = 'idCycles';

    protected $fillable = [
        'libelle_C',
    ];
}
