<?php

namespace App\Models\General;

use App\Models\Admin\Subject;
use App\Models\Admin\Degree;
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
        'institute',
        'year',
        'docs',
    ];


    public function subject()
    {
        return $this->hasOne(Subject::class);
    }

    public function degree()
    {
        return $this->hasOne(Degree::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
