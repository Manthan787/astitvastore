<?php



class CategoriesController extends BaseController {

	public function __construct()
	{
		Parent::__construct();
        $this->beforeFilter('csrf',['on'=>'post']);
        $this->beforeFilter('admin');
	}	



	public function getIndex(){
		$categories=Category::all();

		return View::make('categories.index')
		->with('categories', $categories);


    } 

    public function postCreate(){
    	$validator=Validator::make(Input::all(), Category::$rules);
    	if($validator->passes())
    	{
    	$category=new Category;
    	$category->name=Input::get('name');
    	$category->save();
    	return Redirect::to('admin/categories')
    	->with('message','Wohoo! success!');
    	}

    	return Redirect::to('admin/categories')
    	->with('message', 'Something Went Wrong')
    	->withErrors($validator)
    	->withInput();
    }

    public function postDelete(){
    	$id=Input::get('id');
    	$category=Category::find($id);
    	if($category)
    	{
    		$category->delete();
    		return Redirect::to('admin/categories')
    		->with('message','Category Successfully Deleted.');
    	}

    	return Redirect::to('admin/categories')
    	->with('message','Could not perform deletion. Please try again later.');
    	

    }
}