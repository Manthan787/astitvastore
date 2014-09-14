@extends('layouts.main')
@section('title')
{{ $product->title }}
@stop

@section('content')
<div class="container">
    <div class="row product">
        <div class="span6">
            <figure>
                <div class="main">
                     {{ HTML::image($product->image,$product->title) }}
                </div>
                <ul class="thumbs">
                    <li class="item dib">
                        <a href="#">
                            <img src="/{{ $product->backimage }}" alt=""/>
                        </a>
                    </li>
                    @if($product->image3)
                    <li class="item dib">
                        <a href="#">
                            <img src="/{{ $product->image3 }}" alt=""/>
                        </a>
                    </li>
                    @endif
                    @if($product->image4)
                    <li class="item dib">
                        <a href="#">
                            <img src="/{{ $product->image4 }}" alt=""/>
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
                                <input type="radio" name="size"/>
                                <b>XS</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size"/>
                                <b>XS</b>
                            </label>
                        </li>
                        @endif
                        @if($product->S==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size"/>
                                <b>XS</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size"/>
                                <b>S</b>
                            </label>
                        </li>
                        @endif

                        @if($product->M==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size"/>
                                <b>M</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size"/>
                                <b>M</b>
                            </label>
                        </li>
                        @endif
                        @if($product->L==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size"/>
                                <b>L</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size"/>
                                <b>L</b>
                            </label>
                        </li>
                        @endif
                        @if($product->XL==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size"/>
                                <b>XL</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size"/>
                                <b>XL</b>
                            </label>
                        </li>
                        @endif
                        @if($product->XS==1)
                        <li class="item dib">
                            <label>
                                <input type="radio" name="size"/>
                                <b>XXL</b>
                            </label>
                        </li>
                        @else
                        <li class="item dib unavailable">
                            <label>
                                <input type="radio" name="size"/>
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
                        <div class="urbaspin inline">
                            <i data-arrow="down">-</i>
                            <label>1</label>
                            <i data-arrow="up">+</i>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="row actions">
                <div class="span4">
                    <button class="button mustard">Add to cart</button>
                </div>
                
            </div>
        </div>
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
                        <img src="/{{ $rp->image }}" alt="">
                    </div>
                    <div class="back_image">
                        <img src="/{{ $rp->backimage }}" alt="">

                    </div>
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