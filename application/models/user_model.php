<?php
/**
 * Created by Developer Prince.
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 11:07
 */
class user_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function login ($email, $enc_password){
        
         $this->db->where('email', $email);
         $this->db->where('password', $enc_password);

         $result = $this->db->get('user');

         if($result->num_rows() == 1){
             return $result->row(0)->id;
         }else{
             return false;
         }
    }   

    public function register($enc_password){
        $data = array(
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password
        ); 

        return $this->db->insert('user', $data);
	}
	
	public function get_user_num(){
		return $this->db->count_all('user');
	}
}
