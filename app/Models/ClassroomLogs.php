<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class ClassroomLogs extends Model
{
    use HasFactory;

    protected $table = 'class_room_logs';
    protected $fillable = [
        'class_room_id',
        'tutor_join_time',
        'student_join_time',
        'class_end_time',
        'class_ended_by',      
    ];


}


