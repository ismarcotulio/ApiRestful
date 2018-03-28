<?php

namespace App;

use App\product;

class seller extends user
{
    public function products(){
    	return $this->hasMany(product::class);
    }
}
