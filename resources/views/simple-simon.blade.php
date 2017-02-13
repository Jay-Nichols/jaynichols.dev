@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<title>Simple Simon</title>
	<body>
		<h1>Simple Simon</h1>
		<div id="wrapper">
			<div id="squareDiv">
				<div class="square" id="red" data-value="0"></div>
				<div class="square" id="blue" data-value="1"></div>
				<div class="square" id="yellow" data-value="2"></div>
				<div class="square" id="green" data-value="3"></div>
			</div>
			<div id="gameInfo">
				<div readonly id="scoreTextArea" rows="3" cols="40">
				Level: <span id="levelNumber">0</span>
				<p id="message"> Click Start</p>
				</div>
			</div>
			<div>
				<button id="startGame">Start Game</button>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="/simplesimon.js"></script>
	</body>
</html>

@stop