<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\General\Education;

class Degree extends Model
{
    use HasFactory;


    public function education()
    {
<<<<<<< HEAD
        return $this->belongsTo(Education::class);
=======
        return $this->hasMany(Education::class);
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }
}
