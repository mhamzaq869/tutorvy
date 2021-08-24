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

    protected $appends = ['tutor_name','subject_name','course_basic_days','course_standard_days','course_advance_days'];


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
    public function review(){
        return $this->morphMany(Review::class,'reviewable');
    }
    /**
     * Accessor ot Mutator
     */
    public function getTutorNameAttribute()
    {
        $user = User::where('id',$this->user_id)->first();
        return "{$user->first_name} {$user->last_name}";
    }

    public function getSubjectNameAttribute()
    {
        $subject = Subject::where('id',$this->subject_id)->first();
        return "{$subject->name}";
    }

    public function getCourseBasicDaysAttribute()
    {
        $days = explode('[',$this->basic_days);
        $days = explode(']',$days[1]);
        $days = explode(',',$days[0]);

        $d = array();
        for($i=0;$i<sizeof($days);$i++){
            array_push($d,$days[$i]);
        }

        $days = join(',',$d);
        $days = str_replace('"',"",$days);
        return $days;
    }
    public function getCourseStandardDaysAttribute()
    {
        $days = explode('[',$this->standard_days);
        $days = explode(']',$days[1]);
        $days = explode(',',$days[0]);

        $d = array();
        for($i=0;$i<sizeof($days);$i++){
            array_push($d,$days[$i]);
        }

        $days = join(',',$d);
        $days = str_replace('"',"",$days);
        return $days;
    }
    public function getCourseAdvanceDaysAttribute()
    {
        $days = explode('[',$this->advance_days);
        $days = explode(']',$days[1]);
        $days = explode(',',$days[0]);

        $d = array();
        for($i=0;$i<sizeof($days);$i++){
            array_push($d,$days[$i]);
        }

        $days = join(',',$d);
        $days = str_replace('"',"",$days);
        return $days;
    }
}
