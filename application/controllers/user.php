<?php 
	
class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model( 'User_model' );
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index( $page ) {
		$this->load->view( $page );
	}
	
	public function login() {
		if( $this->User_model->checkPlayer() ) {
			redirect( site_url() . '/game/renderMain' );
		}
	}

	public function register() {
		if( $this->User_model->insertPlayer() ) {
			redirect( site_url() . '/game/renderMain' );
		}
	}
}