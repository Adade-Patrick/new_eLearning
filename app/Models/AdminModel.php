<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;

    protected $table = 'Admin';

    protected $fillable = [
        'idUsers',
        'name',
        'email',
        'password',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'idUsers');
    }
}
