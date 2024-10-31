<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Message extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'message',
        'sender_id',
        'group_id',
        'reciever_id',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
    public function reciever()
    {
        return $this->belongsTo(User::class, 'reciever_id');
    }
    public function attachments()
    {
        return $this->hasMany(MessageAttachment::class);
    }
}
