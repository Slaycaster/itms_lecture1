<?php
	//Place your logic, queries, and other backend functionalities here...
	$babies = Baby::all();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<style type="text/css">
			.heading
			{
				font-family: "Segoe UI", "Helvetica", sans-serif;
			}
		</style>
	</head>
	<body>
		<center>
			<h1 class="heading">All Babies Report</h1>
		</center>
			<table border="1" style="page-break-inside: avoid;" class="heading">
					<tr>
						<td>Name</td>
						<td>Age</td>
						<td>Date Created</td>
					</tr>
				<tbody>
					@foreach($babies as $baby)
						<tr>
							<td>{{ $baby->name }}</td>
							<td>{{ $baby->age }}</td>
							<td>{{ $baby->created_at }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	</body>
</html>