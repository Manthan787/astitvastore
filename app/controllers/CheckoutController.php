<?php


class CheckoutController extends BaseController{

	public function __construct(){
		parent::__construct();
	}
	
	public function getIndex(){

			$user=User::find(Auth::user()->id);
			
			return View::make('checkout.index')->with('user',$user);
	}

	public function postDeletefromcart(){
		$id=Input::get('id');
		$orderitem=Orderitem::find($id);
		if($orderitem){
			$orderitem->delete();
			return Redirect::to('/checkout')->with('message','Item successfully deleted from the cart.');
		}
		return Redirect::back()->with('message','Could not delete the item from your cart. Please Try again. ');
	}

	public function getAddress(){

		$user=Auth::user();
		return View::make('checkout.address')->with('user',$user);

	}

	public function postAddress(){
		$v=Validator::make(Input::all(),['address'=>'required|min:10']);
		if($v->passes())
		{
			$uid=Auth::user()->id;

			$orders=Orderitem::where('user_id',$uid)->where('status',0)->get();
			$neworder=new Order;
			$neworder->address=Input::get('address');
			$neworder->user_id=$uid;
			$neworder->save();
			foreach($orders as $order){
				$order->status=1;
				$order->order_id=$neworder->id;
				$order->save();
			}
			

			return Redirect::to('/checkout/confirm');
		}
		return Redirect::to('/checkout/address')
		->withInput()
		->withErrors($v)
		->with('message','There has been a problem while submitting your address');
	}

	public function getConfirm(){
			return View::make('checkout.confirmation');
	}
}