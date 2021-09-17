<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tktCat extends Model
{
    use HasFactory;

    protected $table = "tkt_cat";

    protected $fillable = [
        'id',
        'title',
    ];

}
