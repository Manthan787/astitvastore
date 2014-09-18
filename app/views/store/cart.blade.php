@extends('layouts.main')
@section('title')
Cart
@stop

@section('content')
<div class="container">
	<div class="cart row">
		<div class="thead span12">
            <div class="row">
                <div class="span8">
                    <h4 class="title">Product</h4>
                </div>
                <div class="span1 text-center">
                    <h4 class="title">QTY.</h4>
                </div>
                <div class="span3 text-center">
                    <h4 class="title">Price</h4>
                </div>
            </div>
        </div>
        @foreach($orders as $order)
        <div class="product span12">
            <div class="row">
                <div class="span8 clearfix">
                    <div class="image">
                        <a href="product.html">
                            <img src="{{ $order->product->image }}" alt=""/>
                        </a>
                    </div>
                    <div class="detail">
                        <p>{{ $order->product->title }} </p>
                        <p>Size: {{ $order->size }}</p>
                        {{ Form::open(['url'=>'/deletefromcart', 'method'=>'post','class'=>'form-inline'])}}
						{{ Form::hidden('id', $order->id)}}
						{{ Form::submit('Delete',['class'=>'button mustard'])}}
						{{ Form::close() }}
                    
                        
                    </div>
                </div>
                <div class="quantity span1 text-center">
                    <div class="urbaspin">
                        
                        <label>{{ $order->quantity }}</label>
                        
                    </div>
                </div>
                <div class="price span3 text-center pull-right">
                    <h5 class="peritem">{{ $order->quantity }}x{{ $order->price }}</h5>
                    <span class="total">Rs. {{ $order->quantity*$order->price }}</span>
                </div>
            </div>
        </div>
        @endforeach
        <div class="total span12">
            <div class="row">
                <div class="items text-right span3 offset6">
                    {{ $count }} items in total price
                </div>
                <div class="price text-center span3">Rs. {{ $total }}</div>
            </div>
        </div>
        @if($total!=0)
        <div class="span12 actions">
            <div class="row">
                <div class="span3">
                    <a href="/" class="button darkgrey">back to shopping</a>
                </div>
                <div class="text-right span3 offset6">
                    <a href="/checkout" class="button button-fluid mustard">Check Out</a>
                </div>
            </div>
        </div>
        @endif
	</div>
</div>
<br>
<br>
<br>
@stop