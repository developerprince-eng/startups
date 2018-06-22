<?php
/**
 * Created by PhpStorm.
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 11:07
 */
class user_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_user($uid = FALSE){
        if($uid === FALSE){
            $query = $this->db->get('user');
            return $query->result_array();
        }

        $query = $this->db->get_where('user', array('uid' => $uid));
        return $query->row_array();
    }
}