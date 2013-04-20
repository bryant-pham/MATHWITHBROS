<?php

class Game_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function challengeGame( $player2_id, $score ) {
		$data = array(
			'player1_id' => 1, //TODO: CHANGE THESE HARDCODES VALUES
			'player2_id' => 2, //TODO: CHANGE THESE HARDCODES VALUES
			'player1_score' => $score,
		);
		$this->db->insert( 'game', $data );
	}

	public function challengedDuel( $game_id, $score ) {
		$data = array(
			'player2_score' => $score
		);
		$this->db->where( 'player2_id', 2 );  //TODO: CHANGE THESE HARDCODES VALUES
		$this->db->where( 'game_id', $game_id );
		$this->db->update( 'game', $data );
	}

	public function fetchDuelRequests( $player_id ) {
		$query = $this->db->query( "SELECT * 
									FROM game 	
									WHERE player2_id = " . $player_id . 
								  " AND player2_score = NULL" );
		return $query;
	}
}