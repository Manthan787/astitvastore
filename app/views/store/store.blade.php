@extends('layouts.main')
@section('title')
Store
@stop
@section('promo')
 <div id="home">

    <div class="fullwidth section featured_bg1 clearfix">
        <div class="container">
            <div class="row clearfix">
                <div class="span12">
                    <h2 class="uppercase promo text-center">Navratri Apparel</h2>
                    <h3 class="uppercase promo text-center">At your doorstep</h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <!-- 
    ==================================================================
    Featured Banner
    ==================================================================
    -->

@stop
@section('content')


    <div class="container">
        
        <!-- 
        ==================================================================
        Big Products Section
        ==================================================================
        -->

        <div class="row twenty_margin_top clearfix">
                <div class="span12 clearfix">
                    <h3 class="heading darkgrey font-light uppercase"><span class="heading_whitebg">Featured products <span class="lightgray"></span></span></h3>
                </div>
        </div>
        
        <div class="row twenty_margin_top clearfix">
                
               @foreach($products as $product)
               <div class="span3 product_image clearfix">
                    <div class="flip_image">
                    <a href="/view/{{ $product->id }}">
                        <div class="front_image">
                            <img src="{{ $product->image }}" width="220" height="250" alt="" />
                        </div>
                        @if($product->backimage)
                        <div class="back_image">
                            <img src="{{ $product->backimage }}" width="220" height="250" alt="" />
                        </div>
                        @endif
                    </a>

                </div>
                
                <div class="description clearfix">

                    <p class="white nomargin">
                        {{ $product->title }}<br/> 
                    </p>
                    <span class="price white">
                       Rs. {{ $product->price }}
                    </span>
                </div>
                </div>
                @endforeach
                </div>  
       <div class="row twenty_margin_top clearfix">
                
               @foreach($products2 as $product)
               <div class="span3 product_image clearfix">
                    <div class="flip_image">
                    <a href="/view/{{ $product->id }}">
                        <div class="front_image">
                            <img src="{{ $product->image }}" width="220" height="250" alt="" />
                        </div>
                        <div class="back_image">
                            <img src="{{ $product->backimage }}" width="220" height="250" alt="" />
                        </div>
                    </a>

                </div>
                
                <div class="description clearfix">

                    <p class="white nomargin">
                        {{ $product->title }}<br/> 
                    </p>
                    <span class="price white">
                       Rs. {{ $product->price }}
                    </span>
                </div>
                </div>
                @endforeach
                </div> 

                </div>
        </div>
        <div class="row twenty_margin_top ten_padding_bottom clearfix">
            <div class="span12 clearfix">
                <a class="load_more uppercase lightgray" href="/category/Kurtas">
                {{ HTML::image('images/elements/plus.png') }}
                    View more
                </a>
            </div>
        </div>
    
    </div>


@stop