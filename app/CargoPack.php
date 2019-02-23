<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\Package;
use App\Adress;
use App\UserInfo;

class CargoPack extends Eloquent
{
    protected $connection = 'mongodb';
    protected $fillable = ['status'];

    public function userInfo()
	{
	  return $this->embedsOne(UserInfo::class);
	}

    public function adress()
	{
	  return $this->embedsOne(Adress::class);
	}
	public function packages()
	{
	  return $this->embedsMany(Package::class);
	}
}