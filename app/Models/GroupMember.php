<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Models;

class GroupMember extends Models
{
    protected $fillable = ['user_id', 'group_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}

