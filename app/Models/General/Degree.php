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
        return $this->hasMany(Education::class);
    }
}
