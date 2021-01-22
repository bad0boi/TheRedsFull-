<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $guarded = [];
    // List of abilities: e.g. edit_article or view_article

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }
}
