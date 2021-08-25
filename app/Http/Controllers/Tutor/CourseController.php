<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\CourseLevel;
use App\Models\CourseOutline;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pen_course = Course::with('outline')->where('user_id',Auth::user()->id)->where('status',0)->get();
        $app_course = Course::with('outline')->where('user_id',Auth::user()->id)->where('status',1)->get();
        $rej_course = Course::with('outline')->where('user_id',Auth::user()->id)->where('status',2)->get();

        return view("tutor.pages.courses.index",compact('pen_course','app_course','rej_course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tutor.pages.courses.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // if($request->hasFile('video')){
        //     $video_path = "storage/course/video/".$request->video->getClientOriginalName();
        //     $request->video->storeAs('course/video/',$request->video->getClientOriginalName(),'public');
        // }

        if($request->hasFile('thumbnail')){
            $thumbnail_path = "storage/course/thumbnail/".$request->thumbnail->getClientOriginalName();
            $request->thumbnail->storeAs('course/thumbnail/',$request->thumbnail->getClientOriginalName(),'public');
        }



        $courselevel = new Course();
        $courselevel->user_id            = Auth::user()->id;
        $courselevel->title              = $request->course_title;
        $courselevel->subject_id         = $request->subject;
        $courselevel->about              = $request->about;
        $courselevel->video              = $request->video;
        $courselevel->thumbnail          = $thumbnail_path ?? '';
        $courselevel->basic_home_work    = $request->basic_home_work ?? null;
        $courselevel->basic_quiz         = $request->basic_quiz ?? null;
        $courselevel->basic_one_one      = $request->basic_one_one ?? null;
        $courselevel->basic_final        = $request->basic_final ?? null;
        $courselevel->basic_note         = $request->basic_note ?? null;
        $courselevel->basic_duration     = $request->basic_duration ?? null;
        $courselevel->basic_days         = json_encode($request->basic_days) ?? null;
        $courselevel->basic_start_time   = $request->basic_start_time ?? null;
        $courselevel->basic_end_time     = $request->basic_end_time ?? null;
        $courselevel->basic_price        = $request->basic_price ?? null;
        $courselevel->standard_home_work = $request->standard_home_work ?? null;
        $courselevel->standard_quiz      = $request->standard_quiz ?? null;
        $courselevel->standard_one_one   = $request->standard_one_one ?? null;
        $courselevel->standard_final     = $request->standard_final ?? null;
        $courselevel->standard_note      = $request->standard_note ?? null;
        $courselevel->standard_duration  = $request->standard_duration ?? null;
        $courselevel->standard_days      = json_encode($request->standard_days) ?? null;
        $courselevel->standard_start_time= $request->standard_start_time ?? null;
        $courselevel->standard_end_time  = $request->standard_end_time ?? null;
        $courselevel->standard_price     = $request->standard_price ?? null;
        $courselevel->advance_home_work  = $request->advance_home_work ?? null;
        $courselevel->advance_quiz       = $request->advance_quiz ?? null;
        $courselevel->advance_one_one    = $request->advance_one_one ?? null;
        $courselevel->advance_final      = $request->advance_final ?? null;
        $courselevel->advance_note       = $request->advance_note ?? null;
        $courselevel->advance_duration   = $request->advance_duration ?? null;
        $courselevel->advance_days       = json_encode($request->advance_days) ?? null;
        $courselevel->advance_start_time = $request->advance_start_time ?? null;
        $courselevel->advance_end_time   = $request->advance_end_time ?? null;
        $courselevel->advance_price      = $request->advance_price ?? null;

        $courselevel->save();

        $request->id = $courselevel->id;
        $this->basicOutline($request);
        $this->standardOutline($request);
        $this->advanceOutline($request);

        return redirect()->route('tutor.course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::with('outline')->find($id);

        return view('tutor.pages.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('video')){
            $video_path = "storage/course/video/".$request->video->getClientOriginalName();
            $request->video->storeAs('course/video/',$request->video->getClientOriginalName(),'public');
        }

        if($request->hasFile('thumbnail')){
            $thumbnail_path = "storage/course/thumbnail/".$request->thumbnail->getClientOriginalName();
            $request->video->storeAs('course/thumbnail/',$request->thumbnail->getClientOriginalName(),'public');
        }


        $courselevel = Course::find($id);

        $courselevel->user_id            = Auth::user()->id;
        $courselevel->title              = $request->course_title ?? $courselevel->title;
        $courselevel->subject_id         = $request->subject ?? $courselevel->subject_id;
        $courselevel->about              = $request->about ?? $courselevel->about;
        $courselevel->video              = $video_path ?? $courselevel->video;
        $courselevel->thumbnail          = $thumbnail_path ?? $courselevel->thumbnail;
        $courselevel->basic_home_work    = $request->basic_home_work ?? $courselevel->basic_home_work;
        $courselevel->basic_quiz         = $request->basic_quiz ?? $courselevel->basic_quiz;
        $courselevel->basic_one_one      = $request->basic_one_one ?? $courselevel->basic_one_one;
        $courselevel->basic_final        = $request->basic_final ?? $courselevel->basic_final;
        $courselevel->basic_note         = $request->basic_note ?? $courselevel->basic_note;
        $courselevel->basic_duration     = $request->basic_duration ?? $courselevel->basic_duration;
        $courselevel->basic_days         = json_encode($request->basic_days) ?? $courselevel->basic_days;
        $courselevel->basic_start_time   = $request->basic_start_time ?? $courselevel->basic_start_time;
        $courselevel->basic_end_time     = $request->basic_end_time ?? $courselevel->basic_end_time;
        $courselevel->basic_price        = $request->basic_price ?? $courselevel->basic_price;
        $courselevel->standard_home_work = $request->standard_home_work ?? $courselevel->standard_home_work;
        $courselevel->standard_quiz      = $request->standard_quiz ?? $courselevel->standard_quiz;
        $courselevel->standard_one_one   = $request->standard_one_one ?? $courselevel->standard_one_one;
        $courselevel->standard_final     = $request->standard_final ?? $courselevel->standard_final;
        $courselevel->standard_note      = $request->standard_note ?? $courselevel->standard_note;
        $courselevel->standard_duration  = $request->standard_duration ?? $courselevel->standard_duration;
        $courselevel->standard_days      = json_encode($request->standard_days) ?? $courselevel->standard_days;
        $courselevel->standard_start_time= $request->start_time ??  $courselevel->standard_start_time;
        $courselevel->standard_end_time  = $request->end_time ?? $courselevel->standard_end_time;
        $courselevel->standard_price     = $request->price ?? $courselevel->standard_price;
        $courselevel->advance_home_work  = $request->advance_home_work ?? $courselevel->advance_home_work;
        $courselevel->advance_quiz       = $request->advance_quiz ?? $courselevel->advance_quiz;
        $courselevel->advance_one_one    = $request->advance_one_one ?? $courselevel->advance_one_one;
        $courselevel->advance_final      = $request->advance_final ?? $courselevel->advance_final;
        $courselevel->advance_note       = $request->advance_note ?? $courselevel->advance_note;
        $courselevel->advance_duration   = $request->advance_duration ?? $courselevel->advance_duration;
        $courselevel->advance_days       = json_encode($request->advance_days) ?? $courselevel->advance_days;
        $courselevel->advance_start_time = $request->advance_start_time ?? $courselevel->advance_start_time;
        $courselevel->advance_end_time   = $request->advance_end_time ?? $courselevel->advance_end_time;
        $courselevel->advance_price      = $request->advance_price ?? $courselevel->advance_price;

        $courselevel->save();

        $request->id = $courselevel->id;

        if($courselevel->outline){
            $courselevel->outline->each(function($record) {
                $record->delete(); // <-- direct deletion
             });
        }

        $this->basicOutline($request);
        $this->standardOutline($request);
        $this->advanceOutline($request);

        return redirect()->route('tutor.course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Add Basic outline of course
     *
     * @param  array $reques
     */
    private function basicOutline($request){
        foreach($request->basic_title as $i => $data){
            CourseOutline::create([
                'course_id' => $request->id,
                'title' => $request->basic_title[$i] ?? null,
                'explain' => $request->basic_explain[$i] ?? null,
                'level' => 1,
            ]);
        }

    }

    /**
     * Add Standard outline of course
     *
     * @param  array $reques
     */
    private function standardOutline($request){
        foreach($request->standard_title as $i=>$data){
            CourseOutline::create([
                'course_id' => $request->id,
                'title' => $request->standard_title[$i] ?? null,
                'explain' => $request->standard_explain[$i] ?? null,
                'level' => 2,
            ]);
        }
    }
    /**
     * Add Advance outline of course
     *
     * @param  array $reques
     */
    private function advanceOutline($request){
        foreach($request->advance_title as $i=>$data){
            CourseOutline::create([
                'course_id' => $request->id,
                'title' => $request->advance_title[$i] ?? null,
                'explain' => $request->advance_explain[$i] ?? null,
                'level' => 3,
            ]);
        }
    }


}
