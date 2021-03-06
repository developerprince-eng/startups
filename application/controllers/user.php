<?php
/**
 * Created by Developer Prince.
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 09:03
 */
class User extends CI_Controller{
	
	public function login(){
		$data['title'] = 'Login';

		//$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('users/reset');
			$this->load->view('templates/login_footer');
		}else {

			
			$email = $this->input->post('email');
			$enc_password = md5($this->input->post('password'));

			$user_id = $this->user_model->reset($to, $enc_password);

			if(!empty($user_id)){
				//Create Session

				$this->session->set_userdata('username', $user_id['username']);
				$this->session->set_userdata('name', $user_id['name']);
				$this->session->set_userdata('surname', $user_id['surname']);
				$this->session->set_userdata('profile_img', $user_id['profile_img']);
				$this->session->set_userdata('role', $user_id['role']);
				$this->session->set_userdata('logged_in', true);
				$this->session->set_flashdata('login_successful','Login in Successful');
				$data['user'] = $user_id;
				
				redirect('startups', $data);
			}else{
				$this->session->set_flashdata('login_failed','Login in invalid check email & password');
				redirect('user');
			}

			redirect('startup');
			
		}
	}

	public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('email');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('surname');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('username');
		
		
		$this->session->set_flashdata('user_logout','You are now logged out');
		redirect('user');
    }

	public function register(){
		$data['title'] = 'Sign Up';

		
    	$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('password2','Confirm Password','matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('users/register');
			$this->load->view('templates/login_footer');
		}else{
			//Encrpyt password with MD5 standards
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			$this->session->set_flashdata('user_registered','You are now Registered and Login');

			redirect('user');
		}
	}

	public function reset(){
		$data['title'] = 'Login';

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('users/index');
			$this->load->view('templates/login_footer');
		}else {

			
			$email = $this->input->post('email');
			$enc_password = md5($this->input->post('password'));

			$user_id = $this->user_model->login($email, $enc_password);

			if(!empty($user_id)){
				
				$this->session->set_flashdata('login_successful','Login in Successful');
				$data['user'] = $user_id;
				
				redirect('user', $data);
			}else{
				$this->session->set_flashdata('login_failed','Login in invalid check email & password');
				redirect('user/reset');
			}

			redirect('user');
			
		}
	}
}
