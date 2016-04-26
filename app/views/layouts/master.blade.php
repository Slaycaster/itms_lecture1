<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- jQuery -->
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	</head>	

	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<a class="navbar-brand" href="{{ URL::to('/') }}">My Babies</a>
		

			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
             </button>

              

            <div class = "collapse navbar-collapse navHeaderCollapse"> 

				<ul class="nav navbar-nav">
					<li> <a href="{{ URL::to('babies') }}">All Babies</a> </li>
					<li> <a href="{{ URL::to('babies/create') }}">Create a Baby</a> </li>
					<li> <a href="{{ URL::to('toys') }}">All Toys</a> </li>
					<li> <a href="{{ URL::to('toys/create') }}">Make a Toy</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="container">
		<br><br>
        @yield('content')
	</div>

</html>

