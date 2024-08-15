<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Models;

class Media extends Models
{
    protected $fillable = ['message_id', 'file_path', 'type' ];

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function message()
    { 
        return $this->belongsTo(Message::class);
    }
}
