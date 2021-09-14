<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{

    protected $table = 'integration';
    protected $fillable = [
        'name',
        'key',
        'key_type',
        'status'
    ];

    use HasFactory;
}
