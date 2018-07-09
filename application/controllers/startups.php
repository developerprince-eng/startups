<?php

/**
 * Created by PhpStorm.
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 11:55
 */
class startups extends CI_Controller{
	public function index(){
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}
		
		/*
		$url = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=b5f55194d174421ab6ad8bf68d7fcc8b';
		$response = http_get($url, null, $info);
		print_r ($response);*/

		$url_g = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=b5f55194d174421ab6ad8bf68d7fcc8b';
		function CallAPI($method, $url, $data = false)
		{
		$curl = curl_init();

		switch ($method)
			{
				/*
				case "GET":
					curl_setopt($curl, CURLOPT_URL, $url);

					$result = curl_exec($curl);
					break;*/
				case "POST":
					curl_setopt($curl, CURLOPT_POST, 1);

					if ($data)
						curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
					break;
				case "PUT":
					curl_setopt($curl, CURLOPT_PUT, 1);
					break;
				default:
					if ($data)
						$url = sprintf("%s?%s", $url, http_build_query($data));
			}

			// Optional Authentication:
			curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($curl, CURLOPT_USERPWD, "username:password");

			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

			$result = curl_exec($curl);

			curl_close($curl);

			return $result;
		}

		$res = CallAPI(NULL, $url_g , false);
		print_r ($res);
		$data['title'] = 'Start ups';

		$data['startups'] = $this->startup_model->get_startups();
		

		$this->load->view('templates/header');
		$this->load->view('startups/index', $data);
		$this->load->view('templates/footer');
	}

	public function upload(){
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}

		$data['title'] = 'Upload Startup';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('brief', 'Brief', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/login_header');
			$this->load->view('startups/upload', $data);
			$this->load->view('templates/login_footer');
		}else {
			$this->startup_model->create_startup();
			redirect('startups');
		}


	}

	public function update(){
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}

		$data["title"] = 'Update Startup';
	}

	public function upload_logo(){
		$config['upload_path']		= '././assets/images/logos';
		$config['allowed_type']		= 'jpg|png';
		$config['max_size']			= 2000;
		$config['max_width']		= 400;
		$config['max_height']		= 400;

		$this->load->library('upload', $config);

		if(!$this->startups->upload_logo('userfile')){
			$error = array('error' => $this->upload_logo->display_errors());

			$this->load->view('startups/upload', $error);
		}else{
			$data = array('upload_data' => $this->upload_logo->data());

			redirect('startups/upload', $data);
		}

	}

	public function upload_cover(){
		$config['upload_path']		= '././assets/images/covers';
		$config['allowed_type']		= 'jpg|png';
		$config['max_size']			= 2000;
		$config['max_width']		= 1200;
		$config['max_height']		= 400;

		$this->load->library('upload', $config);

		if(!$this->startups->upload_logo('userfile')){
			$error = array('error' => $this->upload_logo->display_errors());

			$this->load->view('startups/upload', $error);
		}else{
			$data = array('upload_data' => $this->upload_logo->data());

			redirect('startups/upload', $data);
		}

	}
}