<?php

namespace App\Models\General;

use App\Models\Admin\Subject;
<<<<<<< HEAD
use App\Models\Admin\Degree;
=======
use App\Models\General\Degree;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
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
<<<<<<< HEAD
        'institute',
=======
        'institute_id',
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
        'year',
        'docs',
    ];

<<<<<<< HEAD

    public function subject()
    {
        return $this->hasOne(Subject::class);
=======
    protected $appends = ['c_year'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }

    public function degree()
    {
<<<<<<< HEAD
        return $this->hasOne(Degree::class);
=======
        return $this->belongsTo(Degree::class);
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD
=======

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function getCYearAttribute()
    {
        return $this->attributes['c_year'] = date('Y',strtotime($this->year));
    }
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
}
