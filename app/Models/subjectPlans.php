<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjectPlans extends Model
{

    protected $table = 'subject_plans';
    protected $fillable = [
        'user_id',
        'subject_id',
        'experty_level',
        'experty_title',
        'rate'
    ];

    use HasFactory;
}
