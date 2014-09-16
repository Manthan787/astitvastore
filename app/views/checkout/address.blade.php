@extends('layouts.main')
@section('title')
cart
@stop

@section('content')
<div class="container checkout">
    <!-- Breadcrumbs -->
    <div class="row">
        <div class="cart_nav span12">
            <ul class="list row">
                <li class="item span3">
                    Shopping cart
                </li>
                <li class="item span3 current">
                    Delivery address
                </li>
                
            </ul>
        </div>
    </div>
    <!-- /Breadcrumbs -->

    <!-- Address & Shipping -->
    <div class="row address">

        {{  Form::model('$user',['method'=>'post']) }}
        
            <fieldset class="billing_address span5">
                <div class="row">
                    <h4 class="font-light twenty_margin_bottom span5">Billing address</h4>
                </div>
                <div class="element row">
                    <label class="span2">Address</label>

                    <textarea name="address" value="{{ Auth::user()->address }}"></textarea>
                    <p align="center">{{ $errors->first('address') }}</p>
                </div>
            </fieldset>
            
            <div class="span12 actions">
                <div class="row">
                    <div class="span3">
                        <a href="/checkout" class="button button-fluid darkgrey">Back to cart</a>
                    </div>
                    <div class="text-right span3 offset6">
                        <input type="submit" class="button mustard" value="Confirm order">
                    </div>
                </div>
            </div>
        {{ Form::close() }}
    </div>
    <!-- /Address & Shipping -->

</div>
@stop