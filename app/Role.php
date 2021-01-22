<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];


    // List of roles: e.g. abilities or permissions
    public function abilities ()
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    public function allowTo ($ability)
    {
        if (is_string($ability)) {
            $ability = Ability::whereName($ability)->firstOrFail(); // If statement will enable e.g. $role->allowTo('view_profiles'); via Tinker
        }
        $this->abilities()->save($ability);
    }
}
