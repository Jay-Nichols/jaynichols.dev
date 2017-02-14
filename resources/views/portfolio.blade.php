@extends('layouts.master')

@section('content')
	<body id="portfolio">
		<div class="projects">
			<div class="project">
				<img src="img/simplesimon.jpg" alt="simple simon">
				<h2><a href="/simple-simon">Simple Simon</a></h2>
				<p>A DOM game using JQuery.</p>
			</div>
			<div class="project">
				<img src="img/calculator.png" alt="calculator">
				<h2><a href="/calculator">Calculator</a></h2>
				<p>A calculator utilizing simple JavaScript.</p>
			</div>
			<div class="project">
				<img src="img/weather.png" alt="weather">
				<h2><a href="/weather-map">Weather Map</a></h2>
				<p>A forecasting tool using the<br> Google and Weather Map APIs.</p>
			</div>		
		</div>
	</body>
@stop