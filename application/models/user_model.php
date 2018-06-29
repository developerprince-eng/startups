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

    public function register_user($enc_password){
        $data = array(
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password
        ); 

        return $this->db->insert('user', $data);
    }
}