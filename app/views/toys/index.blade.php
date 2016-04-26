@extends('layouts.master')
@section('content')
	<title>All Toys</title>
	<h1>All Toys</h1>

	<!-- will be used to show messages -->
	@if(Session::has('message'))
		<div class="alert alert-info">
			{{ Session::get('message') }}
		</div>
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<td>ID</td>
			<td>Name</td>
			<td>Picture</td>
			<td>Baby Owner</td>
			<td>Actions</td>
		</thead>
		<tbody>
			@foreach($toys as $toy)
				<tr>
					<td>{{ $toy->id }}</td>
					<td>{{ $toy->name }}</td>
					<td>
						<img style="height:100px; width:100px;"src="{{ URL::asset($toy->picture_path) }}">
					</td>
					<td>{{ $toy->baby->name }}, {{ $toy->baby->age }}</td>
					<td>
						<!--Show button-->
						<a class="btn btn-xs btn-success" href="{{ URL::to('toys/'.$toy->id) }}">Show</a>

						<!--Edit button-->
						<a class="btn btn-xs btn-warning" href="{{ URL::to('toys/'.$toy->id.'/edit') }}">Edit</a>

						<!-- Delete button-->
						{{ Form::open(array('url' => 'toys/' . $toy->id, 'class' => 'pull-right')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('DELETE', array('class' => '
							btn btn-xs btn-danger')) }}
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop