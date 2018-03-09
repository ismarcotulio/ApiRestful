<?php

namespace App;

use App\transaction;

class buyer extends user
{
    public function transactions(){
    	return $this-> hasMany(transaction::class);
    }
}
