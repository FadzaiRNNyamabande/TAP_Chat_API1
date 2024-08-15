<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Models;

class Group extends Models
{
    protected $fillable = ['name', 'description', 'created_by'];

    public function members()
    {
        return $this->hasMany(GroupMember::class);
    }
}


