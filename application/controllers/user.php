<?php
/**
 * Created by PhpStorm.
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 09:03
 */
class user extends CI_Controller{
    public function index(){
        $data['title'] = 'Login User';

        $data['user'] = $this->user_model->get_user();

        $this->load->view('templates/login_header');
        $this->load->view('user/index');
        $this->load->view('templates/login_footer');
    }

    public function register(){
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Password2', 'match[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('user/register');
			$this->load->view('templates/login_footer');
		}else {
			$enc_password = md5($this->input->user('password'));

			$this->user_model->register($enc_password);

			redirect('user');
		}


	}

	public function login(){
		$data['title'] = 'Login';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('user/index');
			$this->load->view('templates/login_footer');
		}else {
			$enc_password = md5($this->input->user('password'));

			$this->user_model->register($enc_password);

			redirect('startup');
		}


	}
}