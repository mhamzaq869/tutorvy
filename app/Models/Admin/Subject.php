<?php

namespace App\Models\Admin;

use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\SubjectCategory;
use App\Models\General\Education;
use App\Models\General\Teach;
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
        return $this->belongsToMany(SubjectController::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCatNameAttribute(){

        $id = $this->category_id;
        $category = SubjectCategory::where('id',$id)->first();

        return $category->name;
    }

    public function teach()
    {
        return $this->belongsTo(Teach::class);
    }
}
