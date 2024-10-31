<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'owner_id',
        'last_message_id',
    ];
    // Relations
    public function users()
    {
        return $this->belongsToMany(User::class, 'group_users');
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function owner()
    {
        return $this->hasMany(User::class);
    }
}
