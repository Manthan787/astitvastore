@extends('layouts.main')
@section('title')
{{ $cat->name }}
@stop

@section('content')
<h2>{{ $cat->name }} </h2>
<hr>
@foreach($products as $product)

					<div class="product">
                        <a href="/view/{{ $product->id }}">{{ HTML::image($product->image, $product->title, ['class'=>'feature','width'=>'200', 'height'=>'250']) }}</a>

                        <h3><a href="/view/{{ $product->id }}">{{ $product->title }}</a></h3>

                        <p></p>

                        <h5>Availability: <span class="instock">In Stock</span></h5>

                        <p>
                            <a href="#" class="cart-btn">
                                <span class="price">Rs{{ $product->price }}</span>
                                 {{ HTML::image('img/white-cart.gif', 'ADD TO CART') }}
                                  ADD TO CART
                            </a>
                        </p>
                    </div>
      @endforeach              
@stop