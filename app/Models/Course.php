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
        'start_date',
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
    public function enrolled()
    {
        return $this->hasMany(CourseEnrollment::class);
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

        if($this->basic_days != null && $this->basic_days != 'null'){
            $days = $this->getDays($this->basic_days);
            return $days;
        }else{
            return '---';
        }
    }
    public function getCourseStandardDaysAttribute()
    {
        if($this->standard_days != null && $this->standard_days != 'null'){
            $days = $this->getDays($this->standard_days);
            return $days;
        }else{
            return '---';
        }
    }
    public function getCourseAdvanceDaysAttribute()
    {
        if($this->advance_days != null && $this->advance_days != 'null'){
            $days = $this->getDays($this->advance_days);
            return $days;
        }else{
            return '---';
        }
    }

    public function getDays($days){

        $days = json_decode($days);
        $day_name = '';
        $day_arr = array();

        for($i = 0 ; $i < sizeof($days) ; $i++){

            switch ($days[$i]) {
                case "1":
                    $day_name = "Monday";
                    break;
                case "2":
                    $day_name = "Tuesday";
                    break;
                case "3":
                    $day_name = "Wednesday";
                    break;
                case "4":
                    $day_name = "Thursday";
                    break;
                case "5":
                    $day_name = "Friday";
                    break;
                case "6":
                    $day_name = "Satureday";
                    break;
                case "7":
                    $day_name = "Sunday";
                    break;
                default:
                    $day_name = "---";
            }

            array_push($day_arr , $day_name);

        }

        $days = implode(',',$day_arr);
        return $days;

    }
}
