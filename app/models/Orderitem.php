<?php

class Orderitem extends Eloquent{

	protected $fillable=['price','size','quantity','status'];
	public static $rules=['price'=>'required', 'size'=>'required','quantity'=>'required'];
	public function product(){

		return $this->belongsTo('Product');
	}
}