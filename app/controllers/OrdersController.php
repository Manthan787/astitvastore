<?php

class OrdersController extends BaseController{

	public function __construct(){
		parent::__construct();
		$this->beforeFilter('admin');
	}

	public function getIndex(){
		
		return View::make('orders')->with('ords',Order::all());
	}
}