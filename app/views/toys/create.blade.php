@extends('layouts.master')
@section('content')
	<title>Make a Toy</title>
	<h1>Make a Toy</h1>

	<!--If there are creation errors, they'll show here-->
	{{ HTML::ul($errors->all()) }}

	<!-- will be used to show upload error messages -->
	@if(Session::has('image-error'))
		<div class="alert alert-danger">
			{{ Session::get('image-error') }}
		</div>
	@endif

	{{ Form::open(array('url' => 'toys', 'files' => 'true')) }}

		<div class="form-group">
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description', Input::old('textarea'), array('class' => 'form-control')) }}
		</div>		

		<div class="form-group">
			{{ Form::label('ToyPicturePath', 'Select image to upload: ') }}
			{{ Form::file('ToyPicturePath', null, array('class' => 'form-control')) }}    
		</div>

		<div class="form-group">
			{{ Form::label('baby_id', 'Choose an owner: ') }}
			{{ Form::select('baby_id', $babies, Input::old('baby_id'), array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Make the toy!', array('class' => 'btn btn-primary btn-block')) }}
	{{ Form::close() }}
@stop