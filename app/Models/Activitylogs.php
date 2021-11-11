<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitylogs extends Model
{
    protected $table = 'activity_logs';
    protected $fillable = [
        'module',
        'table_ref',
        'ref_id',
        'action_perform',
        'user_agent',
        'created_by',
    ];

    use HasFactory;
}
