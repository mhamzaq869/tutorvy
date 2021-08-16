<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Subject;
use App\Models\Admin\SubjectCategory;

class Assessment extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'subject_id',
        'question_1',
        'answer_1',
        'question_2',
        'answer_2',
        'question_3',
        'answer_3',
        'assessment_note',
        'status',
        'verified_by'

    ];

    protected $appends = ['sub_name'];

    public function user()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function subjectCategory()
    {
        return $this->belongsTo(SubjectCategory::class);
    }
    public function getSubNameAttribute()
    {
        return $this->attributes['sub_name'] = Subject::find($this->subject_id)->name;
    }


}
