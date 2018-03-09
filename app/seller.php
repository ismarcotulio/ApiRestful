<?php

namespace App;

use App\product;

class seller extends user
{
    public function products(){
    	$this->hasMany(product::class);
    }
}
