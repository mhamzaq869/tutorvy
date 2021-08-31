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
        $today = Booking::with(['tutor'])->where('user_id',Auth::user()->id)->today()->status(0)->get();
        $upcoming = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(2)->get();
        $pending = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(1)->get();
        $delivered = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(5)->get();
        
        return view('student.pages.booking.index',compact('today','upcoming','pending','delivered'));
    }

    public function bookNow($t_id){

        $subjects = Teach::where('user_id',$t_id)->get();
        return view('student.pages.booking.book_now',compact('t_id','subjects'));
    }
    public function bookingDetail($id){

        $booking = Booking::with(['tutor','user','subject'])->where('id',$id)->first();
        return view('student.pages.booking.booking_detail',compact('booking'));
    }
    public function directBooking($id)
    {
        $tutor = User::with('teach')->find($id);
       return view('student.pages.booking.booking',compact('tutor'));
    }


    public function booked(Request $request)
    {
        $attachments = [];
        $path = '';
        if($request->hasFile('upload')){
            // foreach($request->upload as $i => $upload){
                $path = 'storage/booking/docs/'.$request->upload->getClientOriginalName();
                $request->upload->storeAs('booking/docs',$request->upload->getClientOriginalName(),'public');
                // array_push($attachments,$path);
            // }
        }

        $tutor = User::where('id',$request->tutor_id)->first();
        $price = $tutor->hourly_rate * $request->duration;

        Booking::create([

            'user_id' => Auth::user()->id,
            'booked_tutor' => $request->tutor_id,
            'subject_id' =>$request->subject,
            'topic' => $request->topic,
            'question' => $request->question,
            'brief' => $request->brief,
            'attachments' => $path,
            'class_date' => $request->date,
            'class_time' => $request->time,
            'duration' => $request->duration,
            'price' => $price,
        
        ]);

        return response()->json([
            'status'=>200,
            'message' => 'success'
        ]);
    }

    function bookingPayment($id){

        $booking = Booking::find($id);
        $booking->status = 2;
        $booking->save();

        return response()->json([
            'status'=>'200',
            'message' => 'Booking accepted.'
        ]);

    }
}
