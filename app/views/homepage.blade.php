<html>
	<head>
		<title>Homepage</title>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">

		<!-- jQuery -->
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<!-- Custom Search JS -->
		<script src="{{ URL::asset('js/search.js') }}"></script>
	</head>	

	<body>
		<div class = "navbar navbar-default navbar-fixed-top">
			<div class = "container">
				<a href="{{ URL::to('/') }}" class="navbar-brand">Your Logo Here</a>

				<!-- Hamburger menu -->
                <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse navHeaderCollapse">

                	<ul class="nav navbar-nav">
                		<li><a href="{{ URL::to('babies') }}">Babies</a></li>
                		<li><a href="{{ URL::to('toys') }}">Toys</a></li>
                	</ul>

                	<ul class="nav navbar-nav navbar-right">
                		<li><a href="#">Login</a></li>
                	</ul>
                </div>

			</div>
        </div>
         <!-- end of navbar -->

        <br> <br> <br>

        <!-- Heading -->
        <div class="container">
        	<div class="jumbotron">
	        		<h1>Search Here...</h1>

					<div class="form-group">
						<input type="text" id="search-input" class="form-control" placeholder="Search..." onkeydown="down()" onkeyup="up()">
					</div>

					<div class="col-lg-12" id="search-results">
					</div>
				</div>
        	</div>
        </div>


        <!-- Features -->
        <div class="container">
        	<div class="row">
        		<div class="col-md-3">
        			<div class="panel panel-info">
        				<div class="panel-heading">
        					<h3>Paragraph 1</h3>
        				</div>
        				<div class="panel-body">
		        			<p>Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.</p>
        				</div>
        				<div class="panel-footer">
        					<p class="text-muted">This is a sample.</p>
        				</div>
        			</div>
        		</div>

        		<div class="col-md-3">
        			<div class="page-header">
	        			<h3>Paragraph 2</h3>
        			</div>
        			<p>To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.</p>
        			<a href="#" class="btn btn-success btn-sm btn-block">
        				<i class="fa fa-image fa-fw"></i> Learn More</a>
        		</div>
        		<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-12">
        					<div class="page-header">
			        			<h3>Paragraph 3</h3>
        					</div>
		        			<p>Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.</p>
        				</div>
        			</div>

        			<div class="row">
        				<div class="col-md-4 col-xs-4">
        					<h4>Paragraph 3.1</h4>
        					<p>Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.</p>
        				</div>
        				<div class="col-md-4 col-xs-4">
        					<h4>Paragraph 3.2</h4>
        					<p>Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.</p>
        				</div>
        				<div class="col-md-4 col-xs-4">
        					<h4>Paragraph 3.3</h4>
        					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
	</body>
</html>