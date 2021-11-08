<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Subject;

class Userdetail extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'ip',
        'degree',
        'major',
        'institute',
        'year',
        'designation',
        'organization',
        'start_date',
        'end_date',
        'teach',
        'student_level',
        'availability',
        'hourly_rate',
        'docs',
    ];
    protected $appends = ['std_level','subjects'];
   /**
     * one-to-Many Relation to user Model.
     *
     * @var array
     */

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function userIp(){
        return $this->belongsTo(User::class);
    }
    // Function to get student level according to ID
    public function getStdLevelAttribute(){

        $level = $this->student_level;
        if($level != null){

            if($level == 1){
                return 'Basic';
            }elseif($level == 1){
                return 'Intermediate';
            }else{
                return 'Expert';
            }
        }else{
            return '---';
        }
    }

    public function getSubjectsAttribute(){

        $teach_arr = explode(",",$this->teach);
        $subjects = array();
        for($i = 0; $i < sizeof($teach_arr) ; $i ++){
            if($i < 3){
                $subject = Subject::where('id',$teach_arr[$i])->first();
                array_push($subjects , $subject->name);
            }else{
                break;
            }
        }
        
        return implode(",",$subjects);
    }

    // public function setDegreeAttribute()
    // {
    //    return json_decode($this->degree);
    // }

}
