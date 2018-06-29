<?php

/**
 * Created by Developer Prince.
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 09:22
 */
class registers extends CI_Controller{

    public function index(){
    	$data['title'] = 'Sign Up';

		
    	$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('password2','Confirm Password','matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('registers/register');
			$this->load->view('templates/login_footer');
		}else{
			//Encrpyt password with MD5 standards
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			$this->session->set_flashdata('user_register','You are now Registered and Login');

			redirect('user');
		}
		
	}
}