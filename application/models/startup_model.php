<?php

/**
 * Created by PhpStorm.
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 15:53
 */
class startup_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_user($uid = FALSE){
		if ($uid === FALSE) {
			$query = $this->db->get('startup');
			return $query->result_array();
		}

		$query = $this->db->get_where('startup', array('sid' => $uid));
		return $query->row_array();
	}

	public function create_startup(){
		$sid = url_title($this->input->startup('title'));

		$data = array(
			'name' => $this->input->startup('name'),
			'sid' => $sid,
			'description' => $this->input->startup('description')
		);

		return $this->db->insert('startup', $data);
	}
}