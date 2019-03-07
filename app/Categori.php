<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use App\SubCategori;

class Categori extends Eloquent
{
    protected $connection = 'mongodb';
    protected $fillable = ['categori_name'];

    public function subCategori()
	{
	  return $this->hasOne(SubCategori::class);
	}
}
