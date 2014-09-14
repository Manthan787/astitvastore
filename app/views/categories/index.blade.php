@extends('layouts.main')

@section('title')
categories
@stop

@section('content')
<div id="admin">
<h1>Categories</h1>
@foreach($categories as $category)
	<ul>
	<li>
		{{ $category->name }} - 
		{{ Form::open(['url'=>'admin/categories/delete', 'method'=>'post','class'=>'form-inline'])}}
		{{ Form::hidden('id', $category->id)}}
		{{ Form::submit('Delete')}}
		{{ Form::close() }}
	</li>

	</ul>
@endforeach
	<h3>Create New Category </h3>
		
		
	
		{{ Form::open(['url'=>'admin/categories/create']) }}
		{{ Form::label('Category', 'Category Name:')}} 	
		{{ Form::text('name') }} {{ $errors->first() }}
		<br><br>
		{{ Form::submit('Create',['class'=>'secondary-cart-btn'])}}
		{{ Form::close()}}
	</div>


@stop