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
            <div class="row clearfix">
                <div class="span4 clearfix">
                    <div class="featured_category ux_banner hover_zoom">
                        <div class="row">
                            <div class="banner_in uppercase">
                                <a href="product.html">How It works!</a>
                            </div>
                        </div>
                        <div class="banner_bg category_prod1"></div>
                    </div>
                </div>
                <div class="span4 clearfix">
                    <div class="featured_category ux_banner hover_zoom">
                        <div class="row">
                            <div class="banner_in uppercase">
                                <a href="product.html">Store</a>
                            </div>
                        </div>
                        <div class="banner_bg category_prod2"></div>
                    </div>
                </div>
                <div class="span4 clearfix">
                    <div class="featured_category ux_banner hover_zoom">
                        <div class="row">
                            <div class="banner_in uppercase">
                                <a href="product.html">Contact Us</a>
                            </div>
                        </div>
                        <div class="banner_bg category_prod3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
    ==================================================================
    Featured Banner
    ==================================================================
    -->

@stop
@section('content')


    <div class="container">
        <div class="row twenty_margin_top clearfix">
            <div class="span6 clearfix">
                <div class="ux_banner slim hover_zoom">
                    <div class="row">
                        <div class="banner_in banner_padding">
                            <h3 class="white uppercase font-light nomargin nopadding">Men<br/> Wear</h3>
                            <a class="button mustard" href="category_template_1.html">Shop Now</a>
                        </div>
                    </div>
                    <div class="banner_bg banner1"></div>
                </div>
            </div>
            <div class="span6 clearfix">
                <div class="ux_banner slim hover_zoom">
                    <div class="row">
                        <div class="banner_in banner_padding">
                            <h3 class="white uppercase font-light nomargin nopadding">Women<br/> Wear</h3>
                            <a class="button mustard" href="category_template_2.html">Shop Now</a>
                        </div>
                    </div>
                    <div class="banner_bg banner2"></div>
                </div>
            </div>
        </div>
        
        <!-- 
        ==================================================================
        Big Products Section
        ==================================================================
        -->

        <div class="row twenty_margin_top clearfix">
                <div class="span12 clearfix">
                    <h3 class="heading darkgrey font-light uppercase"><span class="heading_whitebg">Featured products <span class="lightgray">for this week</span></span></h3>
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
                        <div class="back_image">
                            <img src="/{{ $product->backimage }}" width="220" height="250" alt="" />
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
       
    <div class="row twenty_margin_top ten_padding_bottom clearfix">
            <div class="span12 clearfix">
                
            </div>
        </div>
    
    </div>


@stop