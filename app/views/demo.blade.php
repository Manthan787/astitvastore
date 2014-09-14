<html>

<body>
{{ Form::open(['url'=>'/upload/','files'=>'true']) }}
	{{ Form::label('image', 'Image') }}
	{{ Form::file('image') }}
	{{ Form::submit('Upload')}}

{{ Form::close() }}
</body>


</html>