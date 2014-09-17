<?php

class OrdersController extends BaseController{

	public function __construct(){
		parent::__construct();
		$this->beforeFilter('admin');
	}

	public function getIndex(){
		$ords=Order::all();
		return View::make('orders')->with('ords',$ords);
	}

	public function getItems($id){
		$order=Order::find($id);
		if($order){
			$Orderitem=Orderitem::where('order_id',$id)->get();
			return View::make('items')->with('Orderitem',$Orderitem);
		}		
	}
}