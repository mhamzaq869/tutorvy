<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseEnrollment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','course_id','plan','price','service_fee','status'];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
