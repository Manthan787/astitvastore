<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable=['firstname', 'lastname', 'Email','telephone','address'];
	public static $rules=[
		'firstname'=>'required|min:2|alpha',
		'lastname'=>'required|min:2|alpha',
		'Email'=>'required|email|unique:users',
		'password'=>'required|between:8,12|alpha_num|confirmed',
		'password_confirmation'=>'required|between:8,12|alpha_num',
		'telephone'=>'between:10,12',
		'admin'=>'integer'	
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
