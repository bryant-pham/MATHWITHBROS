<?php

class User_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function checkPlayer() {
		$user_name = $_POST[ 'user_name' ];

		$this->db->where( 'user_name', $user_name );
		$query = $this->db->get( 'user' );

		if($query->num_rows == 1) {
			$row = $query->row();
			$this->session->set_userdata( 'validated', TRUE );
			$this->session->set_userdata( 'user_id', $row->user_id );
			return TRUE;
		}
		return FALSE;
	}

	public function insertPlayer() {
		$user_name = $_POST[ 'user_name' ];

		$data = array( 
			'user_name' => $user_name
		);
		if( $this->db->insert( 'user', $data ) ) {
			$query = $this->db->get_where( 'user', array( 'user_name' => $user_name ) );
			$row = $query->row();
			$this->session->set_userdata( 'user_id', $row->user_id );
			return TRUE;
		}
		return FALSE;
	}
}