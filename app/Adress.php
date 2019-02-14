<?php
//Adres tablosu bağlanaıcak.....

namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Adresses extends Eloquent
{
	protected $connection = 'mongodb';
	
	public function Adreses()
	{
	  return $this->belongsToMany(User::class);
	}
	public function AddAdress(){

	}
}
