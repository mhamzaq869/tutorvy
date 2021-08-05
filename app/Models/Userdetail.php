<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    use HasFactory;

   /**
     * one-to-Many Relation to user Model.
     *
     * @var array
     */

    public function user(){
        return $this->belongsTo(User::class);
    }

}
