<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\Package;
use App\User;

class Card extends Eloquent
{
    protected $connection = 'mongodb';
    protected $fillable = ['total_cost'];

    public function packages()
	{
	  return $this->embedsMany(Package::class);
	}

	public function user()
	{
	  return $this->embedsOne(User::class);
	}
}
