<?php

namespace App\Models\Admin;

use App\Http\Controllers\Admin\SubjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\SubjectCategory;
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

    public function subCategory(){
        return $this->belongsToMany(SubjectController::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
