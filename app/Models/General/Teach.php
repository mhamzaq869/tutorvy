<?php

namespace App\Models\General;

use App\Models\Admin\Subject;
use App\Models\Admin\SubjectCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subjectPlans;
use App\Models\User;

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
        'subject_id',
        'verified_by'
    ];

    protected $appends = ['sub_name','verified_by_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
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
    }
}
