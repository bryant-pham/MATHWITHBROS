<!DOCTYPE HTML>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<link rel="stylesheet" href=<?php echo base_url('assets/style.css') ?> />
		<script src=<?php echo base_url() . "/assets/math-lib.js" ?>></script>
		<script src=<?php echo base_url() . "/assets/script.js"?>></script>
		<script>
			var Timer;
			var TotalSeconds;
			var score = 0;
			var game_id = <?php echo $game_id ?>;

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
	</head>
	<body>
		<div id="wrapper">
		<div id="timer"></div>
		<div><input id="question-box" class="box" type="text" value="1 + 2"></div>
		<div><input id="answer-box" class="box" type="text" value=""></div>
		<div><input type="button" id="button1" class="button" value=1><div>
		<div><input type="button" id="button2" class="button" value=2><div>
		<div><input type="button" id="button3" class="button" value=3><div>
		<div><input type="button" id="button4" class="button" value=4><div>
		<div><input type="button" id="button5" class="button" value=5><div>
		<div><input type="button" id="button6" class="button" value=6><div>
		<div><input type="button" id="button7" class="button" value=7><div>
		<div><input type="button" id="button8" class="button" value=8><div>
		<div><input type="button" id="button9" class="button" value=9><div>
		<div><input type="button" id="button0" class="button" value=0><div>
		<div><input type="button" id="clear" value="CLEAR"><div>
		</div>
	</body>
</html>