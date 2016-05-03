<?php
	//Place your logic, queries, and other backend functionalities here...
	$baby_id = Session::get('baby_report_id', '1');
	$baby = Baby::find($baby_id);

	$toys = Toy::where('baby_id', '=', $baby_id)->get();
?>
<html>
<title>Baby {{$baby->name}} Report</title>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style type="text/css">
			.heading, h3, h4
			{
				font-family: "Segoe UI", "Helvetica", sans-serif;
			}
		</style>
	</head>
	<body>
			<h1 class="heading">{{ $baby->name }} - Report</h1>
			<h3>Name: {{ $baby->name }}</h3>
			<h3>Age: {{ $baby->age }}</h3>
			<h3>Created At: {{ $baby->created_at }}</h3>
			<br>
			<h1 class="heading">Toys owned:</h1>
			@foreach($toys as $toy)
				<img src="{{ URL::asset($toy->picture_path)}}" style="height:100px; width:100px;">
				<h3>Name: {{ $toy->name }}</h3>
				<br>
			@endforeach
	</body>
</html>