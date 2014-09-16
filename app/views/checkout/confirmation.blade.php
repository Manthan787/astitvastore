@extends('layouts.main')
@section('title')
Confirmation
@stop

@section('content')
<div id="order_confirmation">
    <div class="container">
        <div class="row clearfix">
            <div class="span12">
                <h2 class="uppercase text-center darkgrey font-light">Thank you for your order!</h2>
                <h3 class="darkgrey text-center confirmation_message font-light">Your order was succesfully completed!</h3>
                <h4 class="darkgrey text-center font-light">Your order will be delivered at the earliest.</h4>
            </div>
       	</div>  
    </div>
</div>
@stop