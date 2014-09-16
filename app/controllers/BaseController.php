<?php

class BaseController extends Controller {

	public function __construct()
	{
		
		if(Auth::check()){
		$this->beforeFilter(function(){
			$userid=Auth::user()->id;
			$orders=Orderitem::where('user_id',$userid)->where('status',0);
			$total=0;
			$items=$orders->get();
			foreach($items as $item){
				$temp=$item->quantity*$item->price;
				$total=$total+$temp;
			}
			View::share('count',$orders->count());
			View::share('orders', $orders->get());
			View::share('total',$total);
		});
	}
		$this->beforeFilter(function(){
			View::share('catnav',Category::all());

		});
	}
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
