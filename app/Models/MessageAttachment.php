<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageAttachment extends Model
{
    // use HasFactory, Notifiable;

    protected $fillable = [
        'message_id',
        'name',
        'path',
        'mime',
        'size',
    ];
}
