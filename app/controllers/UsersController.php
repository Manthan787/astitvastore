<?php

class UsersController extends BaseController{

	public function __construct(){

		parent::__construct();
		//$this->beforeFilter('csrf',['on'=>'post']);
	}

	public function getNewaccount(){
		return View::make('user.newaccount');
	}

	public function postCreate(){
		
		return Input::all();
		$validator=Validator::make(Input::all(),User::$rules);

		if($validator->passes())
		{
			$user=new User;
			$user->firstname=Input::get('firstname');
			$user->lastname=Input::get('lastname');
			$user->email=Input::get('email');
			$user->password=Hash::make(Input::get('password'));
			$user->telephone=Input::get('telephone');
			$user->address=Input::get('address');
			$user->save();

			return Redirect::to('users/signin')->with('message','Account created Successfully. Please Sign in');

		}		
		return Redirect::back()
		->with('message','Something Went Wrong!')
		->withErrors($validator)
		->withInput();
	}

	public function getSignin(){
		return View::make('user.signin');
	}

	public function postSignin(){
		if(Auth::attempt(['email'=>Input::get('email'),'password'=>Input::get('password')]))
		{
			return Redirect::to('/')->with('message','You are signed in');
		}	
		return Redirect::to('users/signin')
		->with('message', 'something went wrong. Please Try Again.')
		->withInput();
	}

	public function getSignout(){
		Auth::logout();
		return Redirect::to('/users/signin')->with('message','You have been signed out!');
	}
}