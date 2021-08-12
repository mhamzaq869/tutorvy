<?php

namespace App\Models\General;

use App\Models\Admin\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'subject_id'
    ];

    protected $appends = ['sub_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->hasMany(Subject::class,'id','subject_id');
    }

    public function getSubNameAttribute()
    {
        return $this->attributes['sub'] = Subject::find($this->subject_id)->name;
    }
}
