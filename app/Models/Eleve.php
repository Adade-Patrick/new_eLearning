<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $table = 'eleves';

    protected $fillable = [
        'users_id',
        'info_perso_id',
        'classes_id',
        'cycle_id',
    ];

    /**
     * Relations
     */

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function infoPerso()
    {
        return $this->belongsTo(InfoPerso::class, 'info_perso_id');
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classes_id');
    }

    public function cycle()
    {
        return $this->belongsTo(Cycle::class, 'cycle_id');
    }
}
