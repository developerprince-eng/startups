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
	public function insert($startup){
		$this->db->insert('startup', $startup);
	}
	public function get_startups($sid = FALSE, $limit = FALSE, $offset = FALSE){
		if($limit){
			$this->db->limit($limit, $offset);
		}
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
	public function get_startups_num(){
		return $this->db->count_all('startup');
	}
	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('startup');
		return true;
	}
	public function appove($id){
		$this->db->where('id', $id);
		$this->db->update('startup', array('approve' => 1));
		return true;
	}
	public function suspend($id){
		$this->db->where('id', $id);
		$this->db->update('startup', array('approve' => 0));
		return true;
	}
}
