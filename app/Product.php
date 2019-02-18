<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\Store;
use App\Package;

class Product extends Eloquent
{
	protected $connection = 'mongodb';
    protected $fillable = ['title','subtitle','cost','store_id','props'];
}