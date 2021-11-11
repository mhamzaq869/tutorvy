<?php

namespace App\Models\Admin;

<<<<<<< HEAD
use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\SubjectCategory;
use App\Models\General\Education;
use App\Models\General\Teach;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\SubjectCategory;
use App\Models\Booking;
use App\Models\General\Education;
use App\Models\General\Teach;
use App\Models\Course;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
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
<<<<<<< HEAD
        return $this->belongsToMany(SubjectController::class);
=======
        return $this->belongsToMany(SubjectCategory::class);
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }

    public function education()
    {
<<<<<<< HEAD
        return $this->belongsTo(Education::class);
    }


=======
        return $this->hasMany(Education::class);
    }
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD
    public function getCatNameAttribute(){

=======
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
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
        $id = $this->category_id;
        $category = SubjectCategory::where('id',$id)->first();

        return $category->name;
    }

<<<<<<< HEAD
    public function teach()
    {
        return $this->belongsTo(Teach::class);
    }
=======
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
}
