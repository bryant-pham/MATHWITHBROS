function check() {
	var question = document.getElementById( "question-box" ).value;
	var input = Number( document.getElementById( "answer-box" ).value );
	var first_digit = Number( question.slice( 0, 1 ) );
	var last_digit = Number( question.slice( -1 ) );
	var answer = first_digit + last_digit;
	if( answer == input ) {
		questionGen();
		$( "#answer-box" ).val( '' );
	}
}

function numberGen() {
	return Math.floor( ( Math.random() * 9 ) + 1 );
}

function questionGen() {
	var first_digit = numberGen();
	var last_digit = numberGen();
	var question = String( first_digit ) + " + " + String( last_digit );
	$('#question-box').val( question );
}