@extends('layouts.main')
@section('title')
Orders
@stop

@section('content')
<div class="container">

    <div class="row my_account">
    
    	<h4 class="span12">Order</h4>
        <div class="span12 order_history">
           @foreach($Orderitem as $item)
           <li>
           <h3>
           {{ $item->order_id }}
           </h3>
           </li>
           <li>
           {{ $item->product->title }}
           </li> 
           <li>
            QTY: {{ $item->quantity }}
           </li>
           <li>
            Size: {{ $item->size }}
           </li>
           <li>
           Price: {{ $item->price }}
           </li>
           @endforeach
        </div>
    </div>
</div>
@stop