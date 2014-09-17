@extends('layouts.main')
@section('title')
{{ $product->title }}
@stop

@section('content')
<div class="container">
<p class="grey" align="center">

    {{ $errors->first('size') }} <br>
    {{ $errors->first('quantity') }}
</p>

    <div class="row product">
        <div class="span6">
            <form action="/addtocart" method="post">
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="price" value="{{ $product->price }}">

            <figure>
                <div class="main">
                     {{ HTML::image($product->image,$product->title) }}
                </div>
                <ul class="thumbs">
                    @if($product->backimage)
                    <li class="item dib">
                        <a href="#">
                            <img src="{{ $product->backimage }}" alt=""/>
                        </a>
                    </li>
                    @if($product->image3)
                    <li class="item dib">
                        <a href="#">
                            <img src="{{ $product->image3 }}" alt=""/>
                        </a>
                    </li>
                    @endif
                    @if($product->image4)
                    <li class="item dib">
                        <a href="#">
                            <img src="{{ $product->image4 }}" alt=""/>
                        </a>
                    </li>
                    @endif
                </ul>
            </figure>
        </div>
        <div class="span6">
            <h3 class="title font-light">{{ $product->title }}</h3>
            
            <div class="price">Rs. {{ $product->price }}</div>
            <p>
                {{ $product->description }}
            </p>
            <ul class="info">
                <li class="item clearfix">
                    <label class="pull-left">Choose size</label>

                    <ul class="sizes product_sizes pull-right">
                        @if($product->XS==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size" value="XS"/>
                                <b>XS</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size" value="XS"/>
                                <b>XS</b>
                            </label>
                        </li>
                        @endif
                        @if($product->S==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size" value="S"/>
                                <b>S</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size" value="S"/>
                                <b>S</b>
                            </label>
                        </li>
                        @endif

                        @if($product->M==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size" value="M"/>
                                <b>M</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size" value="M"/>
                                <b>M</b>
                            </label>
                        </li>
                        @endif
                        @if($product->L==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size" value="L"/>
                                <b>L</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size" value="L"/>
                                <b>L</b>
                            </label>
                        </li>
                        @endif
                        @if($product->XL==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size" value="XL"/>
                                <b>XL</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size" value="XL" />
                                <b>XL</b>
                            </label>
                        </li>
                        @endif
                        @if($product->XS==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size" value="XXL"/>
                                <b>XXL</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size" value="XXL"/>
                                <b>XXL</b>
                            </label>
                        </li>
                        @endif
                    </ul>
                </li>
                <li class="item clearfix">
                    <label class="pull-left">Availability</label>
                    @if($product->availability==1)
                    <div class="availability pull-right">In Stock</div>
                    @else
                    <div class="unavailability pull-right">Out Of Stock</div>
                    @endif
                </li>
                <li class="item clearfix">
                    <label class="pull-left">Quantity</label>
                    <div class="quantity pull-right">
                            <label><input type="text" name="quantity"></label>
                        
                        </div>
                    </div>
                </li>
            </ul>
            @if($product->availability==1)
            <div class="row actions">
                <div class="span4">
                    <input type="submit" class="button mustard" value="Add To Cart"></button>
                </div>
            </div>
            @endif
        </div>
    
<br>
<br>
<div class="row twenty_margin_top clearfix">
        <div class="span12">
            <h3 class="heading darkgrey font-light uppercase">
                <span class="heading_whitebg">You might want to 
                    <span class="lightgray">check this out!</span>
                </span>
            </h3>
        </div>
    </div>
    <div class="row twenty_margin_top clearfix">
    @foreach($random as $rp)
        <div class="span3 product_image clearfix">
            <div class="flip_image">
                <a href="/view/{{ $rp->id }}">
                    <div class="front_image">
                       {{ HTML::image($rp->image, $rp->title) }}
                    </div>
                    @if($rp->backimage)
                    <div class="back_image">
                        {{ HTML::image($rp->backimage, $rp->title) }}

                    </div>
                    @endif
                </a>
            </div>
            <div class="description clearfix">
                <p class="white nomargin">
                    {{ $rp->title }}
                </p>
                <span class="price white">
                    {{ $rp->price }}
                </span>
            </div>
        </div>
        @endforeach
                </div>
    </div>
</div>
<br>
<br>
<br>

@stop