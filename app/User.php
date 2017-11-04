<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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

    public function fullName()
    {
        if(!$this->first_name){

            return 'name fehlt';
        }

        return "{$this->first_name} {$this->last_name}";
    }

    public function times()
    {
        return $this->hasMany(Time::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

}
