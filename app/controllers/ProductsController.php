<?php


class ProductsController extends BaseController {


	public function __construct()
	{
		Parent::__construct();
		
		$this->beforeFilter('admin');
	}	

	public function getIndex(){

		$products=Product::all();
		$categories=Category::lists('name','id');

		return View::make('products.index')->with('products', $products)->with('categories',$categories);
	}

	public function postCreate(){

		$validator=Validator::make(Input::all(), Product::$rules);

		if($validator->passes())
		{
		$product=new Product;
		$product->title=Input::get('title');
		$product->description=Input::get('description');
		$product->category_id=Input::get('category_id');
		$product->price=Input::get('price');
		$product->availability=Input::get('availability');
		if(Input::get('XS')=='1')
			$product->XS=1;
		if(Input::get('S')=='1')
			$product->S=1;
		if(Input::get('M')=='1')
			$product->M=1;
		if(Input::get('L')=='1')
			$product->L=1;
		if(Input::get('XL')=='1')
			$product->XL=1;
		if(Input::get('XXL')=='1')
			$product->XXL=1;


		$img=Input::file('image');
		
		$filename=date('y-m-d-H:i:s').'-'.$img->getClientOriginalName();
		$path=public_path().'/products/'.$filename;
		Image::make($img->getRealPath())->resize(370,373)->save($path);
		$product->image='/products/'.$filename;
		$product->save();
		if(Input::file('backimage')){
		$bimg=Input::file('backimage');
		$filename=date('y-m-d-H:i:s').'-'.$bimg->getClientOriginalName();
		$path=public_path().'/products/'.$filename;
		Image::make($bimg->getRealPath())->resize(370,373)->save($path);
		$product->backimage='/products/'.$filename;
		$product->save();
		}


		if(Input::file('image3')){
		$img3=Input::file('image3');

		$filename=date('y-m-d-H:i:s').'-'.$img3->getClientOriginalName();
		$path=public_path().'/products/'.$filename;
		Image::make($img3->getRealPath())->resize(370,373)->save($path);
		$product->image3='/products/'.$filename;
		$product->save();
		}

		if(Input::file('image4')){
		$img4=Input::file('image4');
		$filename=date('y-m-d-H:i:s').'-'.$img4->getClientOriginalName();
		$path=public_path().'/products/'.$filename;
		Image::make($img4->getRealPath())->resize(370,373)->save($path);
		$product->image4='/products/'.$filename;
		$product->save();
	}



		return Redirect::to('/admin/products/index')->
		with('message', 'Product Successfully Added!');
		
		}
		return Redirect::to('admin/products/index')->
		with('message', 'There has been a problem while adding this product')->
		withErrors($validator)->withInput();


	}

		public function postDelete(){
			$id=Input::get('id');
			$product=Product::find($id);
			if($product)
			{
				$product->delete();
				return Redirect::to('/admin/products/')
				->with('message', 'Product Successfully Deleted.');
			}
			return Redirect::to('admin/products/')
			->with('message','Error Deleting This Product.Please Try again later.');
		}


		
		

		
}