@extends('layouts.master')
@section('content')
	<title>All Babies</title>
	<h1>All the Babies around</h1>

	<!-- will be used to show messages -->
	@if(Session::has('message'))
		<div class="alert alert-info">
			{{ Session::get('message') }}
		</div>
	@endif


	<table class ="table table-striped table-bordered">
		<thead>
			<td>ID</td>
			<td>Name</td>
			<td>Age</td>
		</thead>

		<tbody>
			@foreach($babies as $baby)
				<tr>
					<td>{{ $baby->id }}</td>
					<td>{{ $baby->name }}</td>
					<td>{{ $baby->age }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	</body>
@stop