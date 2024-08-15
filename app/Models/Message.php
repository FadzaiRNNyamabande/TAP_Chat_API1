<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Models;

class Message extends Models
{
    protected $fillable = ['sender_id', 'receiver_id', 'content', 'type'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id'); 

} 

public function receiver() 
{ 
    return $this->belongsTo(User::class, 'receiver_id');
}

public function media()
{
    return $this->hasMany(Media::class);
}

}
