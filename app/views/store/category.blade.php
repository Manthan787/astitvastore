@extends('layouts.main')
@section('title')
{{ $cat->name }}
@stop

@section('content')
<div id="category_template_1">

    <div class="container">

        <div id="isotope" class="row twenty_margin_top clearfix">
        @foreach($products as $product)
          <div class="span3 product_image clearfix shoes sweaters">
                <div class="flip_image">
                    <a href="/view/{{ $product->id }}">
                        <div class="front_image">
                            <img src="{{ $product->image }}" alt="" />
                        </div>
                        <div class="back_image">
                            <img src="{{ $product->backimage }}" alt="" />
                        </div>
                    </a>
                </div>
                <div class="description clearfix">
                    <p class="white nomargin">
                        {{ $product->title }}<br/> 
                    </p>
                    <span class="price white">
                        {{ $product->price }}
                    </span>
                </div>
            </div>
        @endforeach


        </div>
    </div>
</div>
<br>
<br>
@stop