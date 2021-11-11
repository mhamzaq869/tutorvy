<?php

namespace App\Models;

use App\Models\Admin\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Classroom;
use App\Models\Payments;
class Booking extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'booked_tutor',
        'subject_id',
        'topic',
        'question',
        'brief',
        'attachments',
        'class_date',
        'class_time',
        'class_booked_till',
        'status',
        'duration',
        'cancel_note',
        'reschedule_note',
        'price',
        'student_review',
        'rating',
        'is_reviewed',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function tutor()
    {
        return $this->belongsTo(User::class,'booked_tutor');
    }

    public function classroom()
    {
        return $this->hasOne(Classroom::class,'booking_id','id');
    }

    public function booking_payment()
    {
        return $this->hasOne(Payments::class,'type_id','id');
    }

    public function payment()
    {
        return $this->hasMany(Payments::class,'type_id','id');
    }

    // Scopes for Filteration
    public function scopeToday($query)
    {
        return $query->where(DB::raw('CAST(created_at as date)'),date('Y-m-d'));

    }
    public function scopeTomorrow($query)
    {
        return $query->where(DB::raw('Date(created_at)'),'<=','"'.date('Y-m-d',strtotime($this->created_at."+1 d")).'"');
    }
    public function scopeStatus($query,$status)
    {
        return $query->where('status',$status);
    }
}
