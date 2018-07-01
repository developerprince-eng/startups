<?php

/**
 * Created by PhpStorm.
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 11:55
 */
class startups extends CI_Controller{
	public function index(){
		$data['title'] = 'Start ups';

		$this->load->view('templates/header');
		$this->load->view('startups/index');
		$this->load->view('templates/footer');
	}

	public function upload(){
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}

		$data['title'] = 'Upload Startup';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('location', 'Location');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('startups/upload', $data);
			$this->load->view('templates/login_footer');
		}else {
			$this->startup_model->create_startup();
			redirect('startups');
		}


	}
}