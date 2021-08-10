<?php

namespace App\Models\Admin;

use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Subject;
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
}
