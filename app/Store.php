<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\Product;

class Store extends Eloquent
{
	protected $connection = 'mongodb';
	
	protected $fillable = ['name'];

	public function products()
	{
	  return $this->hasMany(Product::class);
	}
}
