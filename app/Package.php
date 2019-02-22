<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\Product;
use App\Card;

class Package extends Eloquent
{
	protected $connection = 'mongodb';
    protected $fillable = ['amount','pack_cost','product_id','product_title','product_props'];

    protected $dispatchesEvents= [
        'created'=>Events\AddingToCardEvent::class,
    ];

    public function card()
    {
    	return $this->embedsOne(Card::class);
    }

}