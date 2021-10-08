<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = ['booking_id','transaction_id','amount','service_fee','method'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
