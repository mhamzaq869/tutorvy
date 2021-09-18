<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavTutors extends Model
{

    protected $table = 'fav_tutors';
    protected $fillable = [
        'user_id',
        'tutor_id',
    ];

    use HasFactory;
}
