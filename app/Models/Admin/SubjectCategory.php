<?php

namespace App\Models\Admin;

use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Subject;
use App\Models\General\Teach;
class SubjectCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'status',
    ];


    public function subject(){
        return $this->hasMany(Subject::class);
    }

    public function teach(){
        return $this->hasMany(Teach::class,'subject_id','id');
    }


}
