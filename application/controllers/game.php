<?php 

class Game extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'Game_model' );
		$this->load->helper('url');
		$this->user_id = $this->session->userdata( 'user_id' );
	}

	public function index( $page ) {
		$this->load->view( $page );
	}

	public function loadChallenge( $player2_id ) {
		$data[ 'player2_id' ] = $player2_id;
		$this->load->view( 'game', $data );
	}

	public function loadDuel( $game_id ) {
		$data[ 'game_id' ] = $game_id;
		$this->load->view( 'game2', $data );
	}

	public function challenge( $player2_id, $score ) {
		$this->Game_model->challengeGame( $player2_id, $score );
		redirect( site_url() . '/game/renderMain' );
	}

	public function duel( $game_id, $score ) {
		$this->Game_model->challengedDuel( $game_id, $score );
		redirect( site_url() . '/game/renderMain' );
	}

	public function renderMain() {
		$query = $this->Game_model->fetchDuelRequests( $this->user_id );
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'events', $data );
	}

	public function getPlayerlist() {
		$query = $this->Game_model->fetchPlayerList();
		$data[ 'query' ] = $query->result_array();
		$this->load->view( 'playerlist', $data );
	}
}