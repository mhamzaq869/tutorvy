<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TicketChat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "ticket_replies";

    protected $fillable = [
        'sender_id',
        'reciever_id',
        'ticket_id',
        'text'
    ];

}
