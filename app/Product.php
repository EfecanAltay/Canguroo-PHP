<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\Store;

class Product extends Eloquent
{
	protected $connection = 'mongodb';
    protected $fillable = ['title','subtitle','cost','store_id'];

    public function detail(){
    	return $this->embedsOne(ProductDetail::class);
    }
}

class ProductDetail extends Eloquent
{
	protected $connection = 'mongodb';
    protected $fillable = ['brand','model','detailText'];
}
