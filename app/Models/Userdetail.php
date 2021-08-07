<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'ip',
        'degree',
        'major',
        'institute',
        'year',
        'designation',
        'organization',
        'start_date',
        'end_date',
        'teach',
        'student_level',
        'availability',
        'hourly_rate',
        'docs',
    ];
   /**
     * one-to-Many Relation to user Model.
     *
     * @var array
     */

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function userIp(){
        return $this->belongsTo(User::class);
    }

}
