<?php


class UsersTableSeeder extends Seeder{

	public function run(){
		$user=new User;
		$user->firstname='Manthan';
		$user->lastname='Thakar';
		$user->email='manthant15@gmail.com';
		$user->password=Hash::make('admin');
		$user->telephone='7698716148';
		$user->admin=1;
		$user->save();
		
	}
}