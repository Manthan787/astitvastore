<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		 Schema::create('products', function(Blueprint $table)
			{
				$table->increments('id');
				$table->integer('category_id')->unsigned();
				$table->string('title');
				$table->text('description');
				$table->string('image');
				$table->string('backimage');
				$table->string('image3');
				$table->string('image4');
				$table->decimal('price',6,2);
				$table->boolean('availability')->default(1);
				$table->boolean('XS')->default(0);
				$table->boolean('S')->default(0);
				$table->boolean('M')->default(0);
				$table->boolean('L')->default(0);
				$table->boolean('XL')->default(0);
				$table->boolean('XXL')->default(0);
				$table->timestamps();
		
			});

			Schema::table('products', function(Blueprint $table)
			{
				$table->foreign('category_id')->references('id')->on('categories');
			});
	

	}
	public function down()
	{
		Schema::drop('products');
	}

}
