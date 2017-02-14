@extends('layouts.master')

@section('content')
	<body id="portfolio">
		<div class="projects">
			<div class="project">
				<a href="/simple-simon"><img src="img/simplesimon.jpg" alt="simple simon"></a>
				<h2><a href="/simple-simon">Simple Simon</a></h2>
				<p>A DOM game using JQuery.</p>
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
		</div>
	</body>
@stop