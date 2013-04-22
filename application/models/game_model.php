<?php

class Game_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function challengeGame( $player2_id, $score ) {
		$data = array(
			'player1_id' => $this->session->userdata('user_id'),
			'player2_id' => $player2_id,
			'player1_score' => $score,
		);
		$this->db->insert( 'game', $data );
	}

	public function challengedDuel( $game_id, $score ) {
		$data = array(
			'player2_score' => $score
		);
		$this->db->where( 'player2_id', $this->session->userdata('user_id' ));
		$this->db->where( 'game_id', $game_id );
		$this->db->update( 'game', $data );
	}

	public function fetchDuelRequests( $player_id ) {
		$query = $this->db->query( "SELECT player1_id, user_name, game_id 
									FROM game, user 	
									WHERE user_id = player1_id
								  	AND player2_id = " . $player_id . 
								  " AND player2_score is NULL" );
		return $query;
	}

	public function fetchPlayerList() {
		$query = $this->db->query( "SELECT * FROM user" );
		return $query;
	}

	public function fetchMatchHistory( $player_id ) {
		$query = $this->db->query( 'SELECT * 
									FROM game, user 
									WHERE user_id = player1_id
									AND player1_id = ' . $player_id .
								  ' AND winner IS NOT NULL 
								    UNION
								    SELECT *
								    FROM game, user
								    WHERE user_id = player2_id
								    AND player2_id = ' . $player_id .
								  ' AND winner IS NOT NULL'  );
		return $query;
	}
}