<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	</head>	

	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::to('babies') }}">My Babies</a>
			</div>

			<ul class="nav navbar-nav">
				<li> <a href="{{ URL::to('babies') }}">All Babies</a> </li>
				<li> <a href="{{ URL::to('babies/create') }}">Create a Baby</a> </li>
			</ul>
		</nav>
	</div>

	<div class="container">
        @yield('content')
	</div>

</html>