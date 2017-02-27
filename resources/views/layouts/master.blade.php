<!DOCTYPE html>
<html>
<head>
	<title>Jay Nichols</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="/css/site.css" rel="stylesheet">
	<link href="/css/portfolio.css" rel="stylesheet">
	<link href="/css/contact.css" rel="stylesheet">
	<link href="/css/blog.css" rel="stylesheet">
	<link href="/css/simple-simon.css" rel="stylesheet">
	<link href="/css/calculator.css" rel="stylesheet">
	<link href="/css/weather-map.css" rel="stylesheet">
	<link href="/css/bookmarker.css"  rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse" id="navbar">
		<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
			 <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="nameBright" href="/">Jay Nichols</a>
		 </div>

	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="/contact">Contact<span class="sr-only">(current)</span></a></li>
			<li class="active"><a href="/portfolio">Portfolio</a></li>
			<!--blog view is under construction -->
			<!-- <li class="active"><a href="/blog">Blog</a></li> -->
		  </ul>
		</div><!-- /.navbar-collapse-->
	  </div><!-- /.container-fluid-->
	</nav>
	<div class="row">
		<div class="span9">
			@yield('content')
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="/js/simple-simon.js"></script>
	<script src="/js/bookmarker.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>