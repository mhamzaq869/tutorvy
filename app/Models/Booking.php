<?php

namespace App\Models;

use App\Models\Admin\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        'duration',
        'location',
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
        return $this->belongsTo(User::class,'id','booked_tutor');
    }
    // Scopes for Filteration
    public function scopeToday($query)
    {
        return $query->where(DB::raw('Date(created_at)'),date('Y-m-d'));
    }
    public function scopeTomorrow($query)
    {
        return $query->where(DB::raw('Date(created_at)'),'<=',date('Y-m-d',strtotime($this->created_at."+1 day")));
    }
    public function scopeStatus($query,$status)
    {
        return $query->where('status',$status);
    }
}
