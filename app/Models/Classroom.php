<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'classroom';
    protected $fillable = [
        'tutor_id',
        'student_id',
        'subject_id',
        'classroom_id',
        'class_date',
        'class_time',
    ];

}


