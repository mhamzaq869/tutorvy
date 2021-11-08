<?php

namespace App\Models\General;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed recipient_id
 */
class Message extends Model
{
    protected $fillable = ['sender_id','recipient_id','content','seen','attachments'];
}
