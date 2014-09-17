@extends('layouts.main')
@section('title')
Orders
@stop

@section('content')
<div class="container">

    <div class="row my_account">
    @foreach($ords as $ord)
    	<h4 class="span12">Order</h4>
        <div class="span12 order_history">
            <table class="table table-striped table-collapse">
                <thead>
                    <tr>
                        <th class="span2">Order ID</th>
                        <th class="span2">User</th>
                        <th class="span2">Shipping Address</th>
                        <th class="span2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <a href="/admin/orders/items/{{ $ord->id }}">
                        <span>{{ $ord->id }}</span>
                        </a>
                        </td>
                        <td>
                            <span>{{ $ord->user->firstname }} {{ $ord->user->lastname }}</span>
                        </td>
                        <td>
                            <span>{{ $ord->address }}</span>
                        </td>
                        @if($ord->shipped==1)
                        <td>
                            <span>Shipped</span>
                        </td>
                        @else
                        <td>
                            <span>Being Processed</span>
                        </td>
                        @endif
                        
                    </tr>
                </tbody>

             </table>
           </div>
         @endforeach
         
    </div>
</div>
@stop