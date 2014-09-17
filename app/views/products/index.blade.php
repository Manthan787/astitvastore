@extends('layouts.main')

@section('title')
Products
@stop

@section('content')
<div id="admin">
		
	<div class="container auth">
    <h3 class="uppercase normal text-center title">Product Management</h3>
    <div class="row">
    <div class="login span5">
	
		{{ Form::open(['url'=>'admin/products/create','files'=>'true']) }}
		{{ Form::label('Title', 'Title:')}} 	
		{{ Form::text('title') }} {{ $errors->first('title') }}
		{{ Form::label('Description', 'Description:')}} 	
		{{ Form::textarea('description') }} {{ $errors->first('description') }}
		{{ Form::label('Category', 'Category:')}} 	
		{{ Form::select('category_id',$categories) }} {{ $errors->first('category_id') }}
		{{ Form::label('price', 'Price:')}} 	
		{{ Form::text('price') }} {{ $errors->first('price') }}
		{{ Form::label('Availability', 'Availability:')}} 	
		{{ Form::select('availability', ['1'=>'Available','2'=>'Out Of Stock']) }} 
		{{ $errors->first('availability') }}
		<br>
		<label class="pull-left">Choose size</label>
                    <ul class="sizes product_sizes pull-right">
                        <li class="item dib">
                            <label>
                                <input type="checkbox" name="XS" value="1"/>
                                <b>XS</b>
                            </label>
                        </li>
                        <li class="item dib">
                            <label>
                                <input type="checkbox" name="S" value="1"/>
                                <b>S</b>
                            </label>
                        </li>
                        <li class="item dib">
                            <label>
                                <input type="checkbox" name="M" value="1"/>
                                <b>M</b>
                            </label>
                        </li>
                        <li class="item dib">
                            <label>
                                <input type="checkbox" name="L" value="1" />
                                <b>L</b>
                            </label>
                        </li>
                        <li class="item dib">
                            <label>
                                <input type="checkbox" name="XL" value="1" />
                                <b>XL</b>
                            </label>
                        </li>
                        <li class="item dib">
                            <label>
                                <input type="checkbox" name="XXL" value="1" />
                                <b>XXL</b>
                            </label>
                        </li>
                    </ul>
                   <br><br><br>
		{{ Form::label('Front Image(Required)', 'Front Image(Required)')}} 	
		{{ Form::file('image') }} {{ $errors->first('image') }}

		{{ Form::label('Back Image(Required)', 'Back Image(Required)')}} 	
		{{ Form::file('backimage') }} {{ $errors->first('backimage') }}
		{{ Form::label('Image 3', 'Image 3:')}} 	
		{{ Form::file('image3') }} {{ $errors->first('image3') }}
		{{ Form::label('Image 4', 'Image 4:')}} 	
		{{ Form::file('image4') }} {{ $errors->first('image4') }}
		
		<br><br>
		{{ Form::submit('Create',['class'=>'button mustard'])}}
		{{ Form::close()}}
		</div>
	

	<div class="register span6 offset1">
            	<h1>Products</h1>
			
		@foreach($products as $product)
	
	<ul>
		<li>
		<img src="{{ $product->image }}" style="width:15%; height: 12%"/>
		<a href="/admin/products/edit/{{ $product->id }}"> {{ $product->title }}</a>- 
		{{ Form::open(['url'=>'admin/products/delete', 'method'=>'post','class'=>'form-inline'])}}
		{{ Form::hidden('id', $product->id)}}
		{{ Form::submit('Delete',['class'=>'button'])}}
		{{ Form::close() }}
		</li>

	</ul>
		@endforeach
		</div>
	</div>
</div>

@stop