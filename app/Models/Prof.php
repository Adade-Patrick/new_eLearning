<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;

    protected $table = 'profs';
    protected $primaryKey = 'idProfs';

    protected $fillable = [
        'adresse',
        'telephone',
        'specialite',
        'idUsers',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUsers', 'idUsers');
    }
}
