<?php

class Order extends Eloquent{
	
	protected $fillable=['address','user_id'];

	public static $rules=['address:required|min:5'];

	public function user(){
		return $this->belongsTo('User');
	}

	public function items(){
		return $this->hasMany('Orderitem','order_id');
	}
}