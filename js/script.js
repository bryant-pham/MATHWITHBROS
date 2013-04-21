$('document').ready( function() {
	$('#button1').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "1";
		});
		check();
	});
	$('#button2').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "2";
		});
		check();
	});
	$('#button3').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "3";
		});
		check();
	});
	$('#button4').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "4";
		});
		check();
	});
	$('#button5').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "5";
		});
		check();
	});
	$('#button6').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "6";
		});
		check();
	});
	$('#button7').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "7";
		});
		check();
	});
	$('#button8').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "8";
		});
		check();
	});
	$('#button9').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "9";
		});
		check();
	});
	$('#button0').mouseup( function() {
	  	$('#answer-box').val( function(index, val) {
			return val + "0";
		});
		check();
	});
	$( "#clear" ).mouseup( function() {
		$( "#answer-box" ).val( '' );
	});
	questionGen();
	CreateTimer( "timer", 10 );
});