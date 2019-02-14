<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Adresses extends Eloquent
{
	protected $connection = 'mongodb';

    public function user()
	{
	  return $this->belongsToMany(User::class);
	}
	public function AddAdress(){

	}
}
