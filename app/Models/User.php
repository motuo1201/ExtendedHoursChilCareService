<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use \TCG\Voyager\Models\User as VoyageUser;

class User extends VoyageUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function children()
    {
        return $this->hasMany('App\Models\Child');
    }
}
