var Timer;
var TotalSeconds;
var score = 0;

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
	else alert( "GAME OVER BRO " + score );
}

function UpdateTimer() {
	Timer.innerHTML = TotalSeconds;
}

$('document').ready( function() {
	$('#button1').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button2').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button3').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button4').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button5').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button6').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button7').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button8').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button9').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$('#button0').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + event.target.value;
		});
		check();
	});
	$( "#clear" ).mouseup( function() {
		$( "#answer-box" ).val( '' );
	});
	CreateTimer( "timer", 3 );
});