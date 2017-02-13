
(function () {
"use strict";	
	var message = $("#message");

	var redSquare = document.getElementById('red');
	var blueSquare = document.getElementById('blue'); 
	var	yellowSquare = document.getElementById('yellow');
	var	greenSquare = document.getElementById('green');
	var allSquares = [redSquare, blueSquare, yellowSquare, greenSquare];
	var gamesChoice = [];
	var level = 0;
	var playersMatch = [];

//listening for user's choice of squares and comparing to game choice//
	var listenToUserInput = function(){
		$(this).animate({
			opacity: 1
		}, 200).animate ({
			opacity: 0.3
		}, 200)
		console.log(gamesChoice);
		playersMatch.push($(this).attr('id'));
		console.log(playersMatch);
		if (playersMatch.join() == gamesChoice.join()) {
			startLevel();
			animate();
			playersMatch = [];
		}
		if (playersMatch.length == gamesChoice.length) {
			var sorryMessage = [
			"You lost, but you're still a winner in my book!", 
			"This game is over, but for you things are just beginning.", 
			"Have I told you that you look good today? Press Start to play again.",
			"You haven't failed; you've just broken the rules. And that's okay.",
			"Your mom still loves you. Play again?",
			"I'm sorry that you lost. Hugging a puppy will make you feel better.",
			"You're still a child of God. (Did I go to far on this one?)",
			"People dig you. Maybe not your Simple Simon skills..."
			] 
			var sorry = sorryMessage[Math.floor(Math.random()*sorryMessage.length)];
			message.html(sorry);
			gamesChoice = [];
			playersMatch = [];

		}
	}

	var startLevel = function() {
		var randomNumber = (Math.floor(Math.random() * 3));
		var randomlySelectedSquare = allSquares[randomNumber].id;
		gamesChoice.push(randomlySelectedSquare);
		level++;
		console.log(gamesChoice);
		console.log(level);

	} 


	var animate = function() {
		var i = 0;
		var intervalId = setInterval(function() {
			$('#' + gamesChoice[i]).animate({
				opacity: 1
			}, 200).animate({
				opacity: 0.3
			}, 200)
			i++;
			if (i == gamesChoice.length) {
				clearInterval(intervalId);
			}
		}, 1000)
	}

	$('button').click(function() {

	gamesChoice;
	playersMatch;

	message.html('');
		
	$('.square').on('click', listenToUserInput);

	
	

	
	startLevel();

	animate();



	


	});











})();