<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\SubjectCategory;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'status',
    ];

    protected $appends = ['cat_name'];
    
    public function getCatNameAttribute(){

        $id = $this->category_id;
        $category = SubjectCategory::where('id',$id)->first();
        return $category->name;
    }
}
