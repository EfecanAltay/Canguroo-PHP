<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\User ;
use App\Store;
use App\Package;


class UserInfo extends Eloquent
{

	public $name;
	public $fillable = ['name' , 'surname'];

}
