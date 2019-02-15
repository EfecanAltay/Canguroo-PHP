<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
	protected $connection = 'mongodb';
	
    //
    public function users()
	{
	  return $this->belongsToMany(User::class);
	}
}
