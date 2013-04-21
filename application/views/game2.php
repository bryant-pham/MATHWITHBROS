<!DOCTYPE HTML>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src=<?php echo base_url() . "js/math-lib.js" ?>></script>
		<script src=<?php echo base_url() . "js/script.js"?>></script>
    	<link rel="stylesheet" href=<?php echo base_url('css/style.css') ?> /> 
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<script>
			var Timer;
			var TotalSeconds;
			var score = 0;
			var player2_id = <?php echo $player2_id ?>;

			function CreateTimer(TimerID, Time) {
				Timer = document.getElementById(TimerID);
				TotalSeconds = Time;

				UpdateTimer()
				window.setTimeout("Tick()", 1000);
			}

			function Tick() {
				if(TotalSeconds > 0 ){
					TotalSeconds -= 1;
					UpdateTimer()
					window.setTimeout("Tick()", 1000);
				}
				else {
					alert( "GAME OVER BRO. YOU SCORED: " + score );
					window.location = 'http://localhost/index.php/game/duel/' + game_id + '/' + score;
				}
			}

			function UpdateTimer() {
				Timer.innerHTML = TotalSeconds;
			}
		</script>
    <link href="/Documents/DuelAcademy/css/style.css" rel="stylesheet" type="text/css">
	<link href="/Documents/DuelAcademy/css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div id="wrapper">
		<div id="timer"></div>
    <div id="question"><input id="question-box" class="box" type="text" value="1 + 2"></div>
		<div><input id="answer-box" class="box" type="text"></div>
		<div id="buttonID">
	      	<div id="button1" class="button">1</div>
			<div id="button2" class="button">2</div>
			<div id="button3" class="button">3</div>
			<div id="button4" class="button">4</div>
			<div id="button5" class="button">5</div>
			<div id="button6" class="button">6</div>
			<div id="button7 style='font-size:2em;" class="button">7</div>
			<div id="button8" class="button">8</div>
			<div id="button9" class="button">9</div>
        	<div id="button0" class="button">0</div>
            <div><input type="button" id="clear" value="CLEAR"></div>
    	</div>
		
        
	</div>
</body>
</html>