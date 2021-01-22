<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravelista\Comments\Commenter;


class User extends Authenticatable
{
    use Notifiable, Commenter;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'location', 'gender', 'favouriteplayer'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // This method will allow me to find a specific user and their article in php artisan tinker via
    // "App\User::find(1) 1 being user with id '1'
    public function articles()
    {
        return $this->hasMany(Article::class);

    }

    //Get $users->roles

    public function roles ()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    // Assign Roles

    public function assignRole($role)
    {
        if (is_string($role)) {
            $role = Role::whereName($role)->firstOrFail();   // This 'if' statement will allow a user to have different roles that are assigned as
                                                            // a string via tinker e.g.  $user->assignRole('e.g. manager or admin');
        }
        $this->roles()->sync($role, false); // sync and false will stop error when manually deleting roles in the table and re-creating a new one
    }

    // View Abilities viaTinker $user->abilities(); if it fails > input: $user->roles->map->abilities->flatten()->pluck('name')->unique();
        // make sure the user has been found and identified

    public function abilities ()
    {
        return $this->roles->map->abilities->flatten()->pluck('name')->unique(); // This relationship isn't eloquent though
    }


}
