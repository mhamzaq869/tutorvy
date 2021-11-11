<?php

namespace App\Models\General;

use App\Models\Admin\Subject;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
use App\Models\Admin\SubjectCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subjectPlans;
use App\Models\User;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

class Teach extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "teachs";

    protected $fillable = [
        'user_id',
<<<<<<< HEAD
        'subject_id'
    ];

    protected $appends = ['sub_name'];
=======
        'subject_id',
        'verified_by'
    ];

    protected $appends = ['sub_name','verified_by_name'];
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
<<<<<<< HEAD
        return $this->hasMany(Subject::class,'id','subject_id');
    }

    public function getSubjectAttribute()
    {
        return $this->subject_id;

=======
        return $this->belongsTo(Subject::class);
    }

    public function subjectCategory()
    {
        return $this->belongsTo(SubjectCategory::class,'subject_ca_id','id');
    }

    public function getSubNameAttribute()
    {
        return $this->attributes['sub_name'] = Subject::find($this->subject_id)->name ?? null;
    }

    public function getVerifiedByNameAttribute()
    {
       $user = User::where('id',$this->verified_by)->first();
       return $user->name ?? '';
    }

    public function subject_plans() {
        return $this->hasMany(subjectPlans::class,'subject_id','subject_id');
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }
}
