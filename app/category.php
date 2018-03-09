<?php

namespace App;

use App\product;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
    	'name',
    	'description',
    ];

    public function products(){
    	$this->belongsToMany(product::class);
    }
}
