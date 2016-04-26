<html>
	<head>
		<title>Search</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">

		<!-- jQuery -->
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<!-- Custom Search JS -->
		<script src="{{ URL::asset('js/search.js') }}"></script>
	</head>	

	<body>
		<br>
		<br>
		<div class="col-lg-4 col-lg-offset-4">
			<div class="form-group">
				<input type="text" id="search-input" class="form-control" placeholder="Search..." onkeydown="down()" onkeyup="up()">
			</div>

			<div class="col-lg-12" id="search-results">

			</div>
		</div>
	</body>
</html>