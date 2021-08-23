<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Admin\Subject;
use App\Models\Admin\SubjectCategory;

class SubjectController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin -- SubjectController
    |--------------------------------------------------------------------------
    |
    | This controller handles Subject from admin side
    |
    |
    */

    public function index()
    {
        $subjects = Subject::get();
        $categories = SubjectCategory::get();
    
        return view('admin.pages.subjects.index',compact('subjects','categories'));
    }

    public function getSubjectsFromApi(){
        $categories = json_decode(Http::get('https://tutorme.com/api/v1/categoriesgroups/?all=true'),true);
        // return $categories;
        foreach($categories as $category){
            $subject_category = SubjectCategory::create([
                'name' => $category['name'],
                'status' => 1
            ]);
            foreach($category['categories'] as $sub_cat ){
                $subject = Subject::create([
                    'category_id' => $subject_category->id,
                    'name' => $sub_cat['name'],
                    'slug' => $sub_cat['slug']
                ]);
            }
        }
        return "added Subjects" ;
    }

    public function insertSubject(Request $request){
        $subject = Subject::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        return response()->json([
            'status'=>'200',
            'message' => 'Subject Added.'
        ]);

    
    }

}
