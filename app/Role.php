<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     // use Notifiable;

    public function User(){
        return $this->belongsToMany(User::class, 'role_users');
    }

    public function RoleUser(){
        return $this->belongsToMany(Role::class, 'role_users');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    protected $fillable = [
        'name'
    ];
}