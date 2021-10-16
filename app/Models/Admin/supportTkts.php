<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class supportTkts extends Model
{
    use HasFactory;

    protected $table = "support_tkts";

    protected $fillable = [
        'id',
    'user_id',
        'cat_id',
        'message',
        'ticket_no',
        'subject',
        'answered_by',
        'status',
    ];


    public function category() {
        return $this->hasOne(tktCat::class, 'id', 'cat_id');
    }

    public function tkt_created_by() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
