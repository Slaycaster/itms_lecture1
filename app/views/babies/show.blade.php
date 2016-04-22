@extends('layouts.master')
@section('content')
	<title>Show a Baby</title>
	<h1>Show Baby</h1>

	<div class="jumbotron text-center">
		<h3>Name: <strong>{{ $baby->name }}</strong></h3>
		<h4>Age: <strong>{{ $baby->age }}</strong></h4>
	</div>
@stop