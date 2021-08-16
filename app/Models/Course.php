<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseLevel;
use App\Models\User;
use App\Models\Admin\Subject;

class Course extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'subject_id',
        'about',
        'video',
        'thumbnail',
    ];

    public function levels()
    {
        return $this->hasMany(CourseLevel::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function outline()
    {
        return $this->hasMany(CourseOutline::class);
    }
}
