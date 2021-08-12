<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Assessment;
use App\Models\Admin\Subject;
use App\Models\General\Education;
use App\Models\General\Professional;
use App\Models\General\Teach;

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
        'first_name',
        'last_name',
        'email',
        'password',
        'ip',
        'dob',
        'phone',
        'picture',
        'city',
        'country',
        'country_short',
        'security',
        'cnic',
        'language',
        'lang_short',
        'bio',
        'provider',
        'role',
        'status',
    ];
    protected $appends = ['address','status_text','day','month','year','subject'];

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
    public function userdetail()
    {
        return $this->hasOne(Userdetail::class);
    }
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
        return $this->attributes['year'] = date('y',strtotime($this->dob));
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }
    public function professional()
    {
        return $this->hasMany(Professional::class);
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

    public function getSubjectAttribute(){

        

    }
}
