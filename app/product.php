<?php

namespace App;

use App\seller;
use App\category;
use App\transaction;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
	const PRODUCTO_DISPONIBLE = 'disponible';
	const PRODUCTO_NO_DISPONIBLE = 'no disponible';

    protected $fillable = [
    	'name',
    	'description',
    	'quantity',
    	'status',
    	'image',
    	'seller_id',
    ];

    public function estaDisponible(){
    	return $this->status == product::PRODUCTO_DISPONIBLE;
    }

    public function seller(){
        $this->belongsTo(seller::class);
    }

    public function transactions(){
        $this->hasMany(transaction::class);
    }

    public function categories(){
        $this->belongsToMany(category::class);
    }
}
