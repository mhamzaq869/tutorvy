<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Classroom extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'classroom';
    protected $fillable = [
        'booking_id',
        'classroom_id',
      
    ];

    public function booking()
    {
        return $this->hasOne(Booking::class,'id','booking_id')->with('user')->with('tutor')->with('subject');
    }

}


