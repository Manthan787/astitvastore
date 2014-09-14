<?php


class StoreController extends BaseController{

	public function __construct(){
		Parent::__construct();
		$this->beforeFilter('csrf',['on'=>'post']);

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
}