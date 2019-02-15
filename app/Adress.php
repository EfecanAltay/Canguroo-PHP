<?php
//Adres tablosu bağlanaıcak.....

namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Adress extends Eloquent
{
	protected $connection = 'mongodb';
	protected $fillable = ['title','adress','post_code'];

}
