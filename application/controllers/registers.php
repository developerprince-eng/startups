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
		$this->form_validation->set_rules('password2','Password2','matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('registers/register');
			$this->load->view('templates/login_footer');
		}else{
			die('Continue');
		}
	}
}