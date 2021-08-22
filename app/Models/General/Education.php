<?php

namespace App\Models\General;

use App\Models\Admin\Subject;
use App\Models\General\Degree;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = "educations";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id',
        'degree_id',
        'subject_id',
        'institute_id',
        'year',
        'docs',
    ];

    protected $appends = ['c_year'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function getCYearAttribute()
    {
        return $this->attributes['c_year'] = date('Y',strtotime($this->year));
    }
}
