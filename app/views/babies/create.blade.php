@extends('layouts.master')
@section('content')
	<title>Create a baby</title>
	<h1>Create a baby</h1>

	<!--If there are creation errors, they'll show here-->
	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'babies')) }}
		
		<div class="form-group">
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('age', 'Age:') }}
			{{ Form::number('age', Input::old('number'), array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Create the Baby!', array('class' => 'btn btn-primary btn-block')) }}
	{{ Form::close() }}
@stop