<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Teach;

class BookingController extends Controller
{

    public function index()
    {
        $today = Booking::where('user_id',Auth::user()->id)->today()->get();
        $tomorrow = Booking::where('user_id',Auth::user()->id)->tomorrow()->get();
        $pending = Booking::where('user_id',Auth::user()->id)->status(0)->get();
        $delivered = Booking::where('user_id',Auth::user()->id)->status(1)->get();

        return view('student.pages.booking.index',compact('today','tomorrow','pending','delivered'));
    }

    public function bookNow($t_id){

        $subjects = Teach::where('user_id',$t_id)->get();
        return view('student.pages.booking.book_now',compact('t_id','subjects'));
    }
    public function bookingDetail(){

        return view('student.pages.booking.booking_detail');
    }
    public function directBooking($id)
    {
        $tutor = User::with('teach')->find($id);
       return view('student.pages.booking.booking',compact('tutor'));
    }


    public function booked(Request $request)
    {
        $attachments = [];
        if($request->hasFile('upload')){
            foreach($request->upload as $i => $upload){
                $path = 'storage/booking/docs/'.$upload->getClientOriginalName();
                $upload->storeAs('booking/docs',$upload->getClientOriginalName(),'public');
                array_push($attachments,$path);
            }
        }

       Booking::create([
        'user_id' => Auth::user()->id,
        'booked_tutor' => $request->tutor_id,
        'subject_id' =>$request->subject,
        'topic' => $request->topic,
        'question' => $request->question,
        'brief' => $request->brief,
        'attachments' => json_encode($attachments),
        'class_date' => $request->date,
        'class_time' => $request->time,
        'duration' => $request->duration,
        'location' => $request->location,
       ]);

       return redirect()->back();
    }
}
