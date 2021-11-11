<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sys_settings extends Model
{
    use HasFactory;

    protected $table = "sys_settings";

    protected $fillable = [
        'user_id',
        'title',
        'logo',
        'favicon',
        'commission',
    ];

}
