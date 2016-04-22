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
			<td>Actions</td>
		</thead>

		<tbody>
			@foreach($babies as $baby)
				<tr>
					<td>{{ $baby->id }}</td>
					<td>{{ $baby->name }}</td>
					<td>{{ $baby->age }}</td>
					<td>
						<!--Show button-->
						<a class="btn btn-xs btn-success" href="{{ URL::to('babies/'.$baby->id) }}">Show</a>

						<!--Edit button-->
						<a class="btn btn-xs btn-warning" href="{{ URL::to('babies/'.$baby->id.'/edit') }}">Edit</a>

						<!-- Delete button-->
						{{ Form::open(array('url' => 'babies/' . $baby->id, 'class' => 'pull-right')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('DELETE', array('class' => '
							btn btn-xs btn-danger')) }}
						{{ Form::close() }}


					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	</body>
@stop