<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
    	'quantity',
    	'buyer_id',
    	'product_id',
    ];
}
