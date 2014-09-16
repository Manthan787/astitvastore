<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderitems', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('product_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->float('price');
			$table->string('size');
			$table->integer('quantity');
			$table->integer('order_id');
			$table->boolean('status')->default(0);
			$table->timestamps();
		});
		Schema::table('orderitems',function(Blueprint $table)
		{
			$table->foreign('product_id')->references('id')->on('products');
			$table->foreign('user_id')->references('id')->on('users');
				
		}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orderitems');
	}

}
