<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class CourseOutline extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_level_id',
        'title',
        'explain',
    ];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }


}
