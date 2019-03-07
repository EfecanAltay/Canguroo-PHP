<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\Product;

class SubCategori extends Eloquent
{
    protected $connection = 'mongodb';
    protected $fillable = ['subcategori_name'];
    
    public function product()
	{
	  return $this->hasOne(Product::class);
	}
}
