<?php


class StoreController extends BaseController{

	public function __construct(){
		Parent::__construct();
		//$this->beforeFilter('csrf',['on'=>'post']);
		$this->beforeFilter('auth',['only'=>['postAddtocart','getCart']]);

	}

	public function getIndex(){
		
		$products=Product::take(4)->orderBy('created_at','DESC')->get();
		return View::make('store.store')->with('products',$products);
	}

	public function getView($id){
		$product=Product::find($id);
		if($product){
			$random=Product::all()->random(4);
			return View::make('store.view')->with('product',$product)->with('random',$random);
		}
		else
		{
			return View::make('404');
		}
	}

	public function getShop(){
		$products=Product::orderBy('created_at','DESC')->get();

		return View::make('store.all')->with('products',$products);
	}
	public function getCategory($category){
		$cat=Category::where('name',$category)->first();
		
		
		if($cat){
			
			$products=Product::where('category_id', $cat->id)->orderBy('created_at','DESC')->get();
			return View::make('store.category')->with('cat', $cat)->with('products', $products);
		}
		else
		{
			return View::make('404');
		}

	}

	public function getSearch(){
		$keyword=Input::get('s');
		$products=Product::where('title','LIKE','%'.$keyword.'%')->get();
		return View::make('store.search')
		->with('products', $products)
		->with('keyword',$keyword);
	}

	public function postAddtocart(){
		
		$v=Validator::make(Input::all(),Orderitem::$rules);
		if($v->passes()){
		$orderitem=new Orderitem;
		$orderitem->product_id=Input::get('product_id');
		$orderitem->price=Input::get('price');
		$orderitem->size=Input::get('size');
		$orderitem->quantity=Input::get('quantity');
		$uid=Auth::user()->id;
		$orderitem->user_id=$uid;
		$orderitem->save();
		return Redirect::back()->with('message','Added to the cart!');
		}
		else{
			return Redirect::back()->
			with('message','Looks like there has been a problem!')
			->withErrors($v)
			->withInput();
		}
	}
	public function getCart(){
		return View::make('store.cart');
	  }
	public function postDeletefromcart(){
		$id=Input::get('id');
		$orderitem=Orderitem::find($id);
		if($orderitem){
			$orderitem->delete();
			return Redirect::to('/cart')->with('message','Item successfully deleted from the cart.');
		}
		return Redirect::back()->with('message','Could not delete the item from your cart. Please Try again. ');
	}
}