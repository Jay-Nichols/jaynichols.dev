@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<body id="portfolio">
		<div class="row">
			<div class="span9">
				<div class="projects">
					<div class="project">
						<a href="/simple-simon"><img src="img/simplesimon.jpg" alt="simple simon"></a>
						<h2><a href="/simple-simon">Simple Simon</a></h2>
						<p>A DOM game using JavaScript and JQuery.</p>
					</div>
					<div class="project">
						<a href="/calculator"><img src="img/calculator.png" alt="calculator"></a>
						<h2><a href="/calculator">Calculator</a></h2>
						<p>A calculator utilizing simple JavaScript.</p>
					</div>
					<div class="project">
						<a href="/weather-map"><img src="img/weather.png" alt="weather"></a>
						<h2><a href="/weather-map">Weather Map</a></h2>
						<p>A forecasting tool using the<br> Google and Weather Map APIs.</p>
					</div>
					<div class="project">
						<a href="/bookmarker"><img src="img/bookmarker.jpg" alt="bookmarker"></a>
						<h2><a href="/bookmarker">Bookmarker</a></h2>
						<p>A JavaScript bookmarker for storing your favorite websites.</p>
					</div>			
				</div>
			</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
@stop