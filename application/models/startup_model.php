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

	public function get_startups($sid = FALSE){
		if ($sid === FALSE) {
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('startup');
			return $query->result_array();
		}

		$query = $this->db->get_where('startup', array('sid' => $sid));
		return $query->row_array();
	}

	public function create_startup(){
		$sid = md5(url_title($this->input->post('name')));

		$data = array(
			'name' => $this->input->post('name'),
			'sid' => $sid,
			'description' => $this->input->post('description'),
			'brief' => $this->input->post('brief')
		);

		return $this->db->insert('startup', $data);
	}
}