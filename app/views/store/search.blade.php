@extends('layouts.main')

@section('title')
Search Results
@stop

@section('search-keyword')
 <section id="search-keyword">
                <h1>Search Results for <span>{{ $keyword }}</span></h1>
            </section>
@stop

@section('content')
<div id="search">
	@foreach($products as $product)

					<div class="product">
                        <a href="/view/{{ $product->id }}">{{ HTML::image($product->image, $product->title, ['class'=>'feature','width'=>'200', 'height'=>'250']) }}</a>

                        <h3><a href="/view/{{ $product->id }}">{{ $product->title }}</a></h3>

                        <p></p>

                        <h5>Availability: <span class="instock">In Stock</span></h5>

                        <p>
                            <a href="#" class="cart-btn">
                                <span class="price">Rs{{ $product->price }}</span>
                                 <img src="img/white-cart.gif" alt="Add to Cart">
                                  ADD TO CART
                            </a>
                        </p>
                    </div>
      @endforeach              
      </div>
@stop