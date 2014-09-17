<?php
Route::get('/404',function()
{
	return View::make('404');
}

);
Route::controller('users','UsersController');
Route::controller('admin/categories', 'CategoriesController');
Route::controller('admin/products','ProductsController');
Route::controller('admin/orders','OrdersController');
Route::controller('checkout','CheckoutController');
Route::controller('/','StoreController');

