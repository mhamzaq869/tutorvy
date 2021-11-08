<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Assessment;
use App\Models\Role;
use App\Models\Admin\Subject;
use App\Models\General\Education;
use App\Models\General\Professional;
use App\Models\General\Teach;
use App\Models\General\Message;
use App\Models\Review;
use App\Models\Student\Wallet;
use PhpParser\Node\Expr\Empty_;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'account_id',
        'first_name',
        'last_name',
        'tagline',
        'email',
        'password',
        'ip',
        'dob',
        'phone',
        'picture',
        'city',
        'country',
        'country_short',
        'region',
        'time_zone',
        'type',
        'cnic_security',
        'gender',
        'language',
        'lang_short',
        'bio',
        'hourly_rate',
        'std_degree',
        'std_subj',
        'std_learn',
        'experty_level',
        'provider',
        'role',
        'status',
        'rating',
        'rank',
        'policies',
        'email_market',
        'token',
        'token_updated_at',
        'is_token_updated',
        'profile_completed',
    ];


    protected $appends = ['address','status_text','day','month','year','subjects','user_experty_level','requests','r_name','isOnline'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * The Relationship between user and userdetail to get
     * his detail data .
     *
     * @return userdetail class
     */

    public function userdetailIp()
    {
        return $this->hasOne(Userdetail::class,'ip','ip');
    }

    public function assessment()
    {
        return $this->hasMany(Assessment::class);
    }

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }

    public function teach()
    {
        return $this->hasMany(Teach::class);
    }
    public function education()
    {
        return $this->hasMany(Education::class);
    }
    public function professional()
    {
        return $this->hasMany(Professional::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function review(){
        return $this->morphMany(Review::class,'reviewable');
    }
    public function booking(){
        return $this->hasMany(Booking::class);
    }
    public function bookedTutor(){
        return $this->hasMany(Booking::class,'booked_tutor','id');
    }
    public function wallet()
    {
        return $this->hasMany(Wallet::class);
    }

    public function scopeCanJoinRoom($room_id)
    {
        return true;
    }

     /**
     * Accessor ot Mutator
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
    public function getDayAttribute()
    {
        return $this->attributes['day'] = date('d',strtotime($this->dob));
    }
    public function getMonthAttribute()
    {
        return $this->attributes['month'] = date('M',strtotime($this->dob));
    }
    public function getYearAttribute()
    {
        return $this->attributes['year'] = date('Y',strtotime($this->dob));
    }


    public function getAddressAttribute(){

        $city = $this->city != null ? $this->city : '---' ;
        $country = $this->country != null ? $this->country : '---';
        $address = $city .' , '. $country;
        return $address;

    }

    public function getStatusTextAttribute(){

        if($this->status == 1){
            return 'Approved';
        }else{
            return 'Pending';
        }

    }
    public function getRNameAttribute(){

       $id = $this->role;
       $role = Role::where('id',$id)->first();
       if($role){
        return $role->name;
       }else{
           return '---';
       }

    }

    public function getSubjectsAttribute(){

        $approved_subjects = $this->teach;
        $subjects = array();
        if(!empty($approved_subjects)){
            foreach($approved_subjects as $sub){
                array_push($subjects,$sub->sub_name);
            }
            return implode(',',$subjects);
        }else{
            return '---';
        }

    }

    public function messages_between($user)
    {

        return Message::where(['sender_id' => $this->id, 'recipient_id' => $user->id])
            ->orWhere(function ($q) use ($user) {
                $q->where('sender_id', $user->id);
                $q->where('recipient_id', $this->id);
            })
            ->orderBy('id', 'ASC')->get();
    }

    // Scopes for Filteration
    public function scopeTutor($query)
    {
        return $query->where('role',2);
    }
    public function scopeActive($query)
    {
        return $query->where('status',2);
    }

    // public function scopeVerified($query)
    // {
    //     return $query->where('verify',1);
    // }
    public function scopeRange($query,$range=null)
    {
        if($range != null){
            return $query->where('hourly_rate','<=',$range);
        }
    }
    public function scopeLocation($query,$loca=null)
    {
        if($loca != null){
            return $query->where('city',$loca);
        }
    }
    public function scopeLanguage($query,$language=null)
    {
        if($language != null){
            return $query->where('language',$language);
        }
    }
    public function scopeGender($query,$gender=null)
    {
        if($gender != null){
            return $query->where('gender',$gender);
        }
    }

    public function getUserExpertyLevelAttribute(){

        $level = $this->experty_level;
        if($level != null){

            if($level == 1){
                return 'Pre Elementary School';
            }elseif($level == 2){
                return 'Elementary School';
            }else if($level == 3) {
                return 'Secondary School';
            }else if($level == 4) {
                return 'High School';
            }else if($level == 4) {
                return 'Post Secondary';
            }else{
                return '-';
            }
        }else{
            return '---';
        }
    }

    public function getRequestsAttribute(){

        $tutor_assessments = Assessment::where('user_id',$this->id)->where('status',0)->get();
        return $tutor_assessments;
    }

    public function getisOnlineAttribute()
    {
        if(Cache::has('online-' . Auth::id()))
        {
           return $this->attributes['isOnline'] = 1;
        }

        return 0;
    }
}
