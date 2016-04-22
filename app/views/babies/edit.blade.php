@extends('layouts.master')
@section('content')
	<title>Edit the baby</title>

	<h1>Edit the baby, {{ $baby->name }}</h1>

	<!--If there are update errors, they will show here-->
	{{ HTML::ul($errors->all()) }}

	{{ Form::model($baby, array('route' => array('babies.update', $baby->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('name', 'Name: ') }}
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('age', 'Age:') }}
			{{ Form::number('age', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit the baby!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop