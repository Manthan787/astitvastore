<?php



class Product extends Eloquent {

	protected $fillable=['category_id','title','description','price','availability', 'image','backimage','image3','image4','XS','S','L','XL','XXL'];

	public static $rules=[
	'category_id'=>'required|integer',
	'title'=>'required|min:3',
	'description'=>'min:10',
	'price'=>'required|numeric',
	'availability'=>'integer',
	'image'=>'required|image|mimes:jpeg,jpg,png,gif',
	'backimage'=>'required|image|mimes:jpeg,jpg,png,gif',
	'image3'=>'mimes:jpeg,jpg,png,gif',
	'image4'=>'mimes:jpeg,jpg,png,gif',
	];

	public function category(){
		
	return	$this->belongsTo('Category');

	}
}