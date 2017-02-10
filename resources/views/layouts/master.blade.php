<!DOCTYPE html>
<html>
<head>
	<title>Jay Nichols</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="/css/site.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/personal-site.css">
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
				<a class="navbar-brand" id="nameBright" href="/index.html">Jay Nichols</a>
		 </div>

	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="/contact.html">Contact<span class="sr-only">(current)</span></a></li>
			<li class="active"><a href="/portfolio.html">Portfolio</a></li>
			<li class="active"><a href="/blog.html">Blog</a></li>
			<li class="active"><a href="/fiction.html">Fiction</a></li>
		  </ul>
		</div><!-- /.navbar-collapse-->
	  </div><!-- /.container-fluid-->
	</nav>
	<div class="main-body">
		@yield('content')
	<div>
</body>
</html>