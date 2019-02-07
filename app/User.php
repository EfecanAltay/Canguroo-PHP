<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
//use Illuminate\Contracts\Auth\Authenticatable ;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable
{
	use AuthenticableTrait;

    protected $connection = 'mongodb';

    protected $fillable = ['name','email', 'password']; 

    public function roles()
	{
	  return $this->belongsToMany(Role::class);
	}
 	
 	/**
	* @param string|array $roles
	*/
	public function authorizeRoles($roles)
	{
	  if (is_array($roles)) {
	      return $this->hasAnyRole($roles) || 
	             abort(401, 'This action is unauthorized.');
	  }
	  return $this->hasRole($roles) || 
	         abort(401, 'This action is unauthorized.');
	}
	/**
	* Check multiple roles
	* @param array $roles
	*/
	public function hasAnyRole($roles)
	{
	  return null !== $this->roles()->whereIn(‘name’, $roles)->first();
	}
	/**
	* Check one role
	* @param string $role
	*/
	public function hasRole($role)
	{
	  return null !== $this->roles()->where(‘name’, $role)->first();
	}

}
