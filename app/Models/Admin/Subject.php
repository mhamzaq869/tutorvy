<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\SubjectCategory;
use App\Models\Booking;
use App\Models\General\Education;
use App\Models\General\Teach;
use App\Models\Course;
use App\Models\User;
class Subject extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'status',
    ];
    protected $appends = ['cat_name'];


    public function subCategory(){
        return $this->belongsToMany(SubjectCategory::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function teach()
    {
        return $this->hasMany(Teach::class);
    }
    public function assessment(){
        return $this->hasMany(Assessment::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
    public function getCatNameAttribute()
    {
        $id = $this->category_id;
        $category = SubjectCategory::where('id',$id)->first();

        return $category->name;
    }

}
