<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Developer Prince
 * User: TechVillage Laptop01
 * Date: 21/06/2018
 * Time: 11:55
 */
class Startup extends CI_Controller{
	public function index($offset = 0){
		
		//Pagination Config 
		$config['base_url'] = base_url() . 'startups/';
		$config['total_rows'] = $this->db->count_all('startup');
		$config['per_page'] = 12;
		$config['uri_segment'] = 2;
		$config['attributes'] = array('class' => 'col');

		//Initialize Pagination
		$this->pagination->initialize($config);

		$data['title'] = 'Start ups';

		$data['startups'] = $this->startup_model->get_startups(FALSE, $config['per_page'], $offset);
		
		//var_dump($this->session->userdata('role'));
		$this->load->view('startups/index', $data);
	}


/*** START OF UPLOAD STARTUP CODE */
// Edited by Developer Martin 
 //upload input and image files
 public function upload(){
	$this->load->helper(array('form', 'file', 'url'));
	$this->load->library('form_validation');
	$this->form_validation->set_rules('name', 'Name', 'trim|required');
	$this->form_validation->set_rules('brief', 'Brief', 'required');
	$this->form_validation->set_rules('description', 'Description', 'required');
	$config_image = array(
		'upload_path' => '././assets/images/startups/logos',
		'allowed_types' => 'jpg|jpeg|png|bmp',
		'max_size' => 1024,
		'max_width' => 1024,
		'max_height' => 786,
		'filename' => url_title($this->input->post('filename'))
	);
	
	$this->load->library('upload', $config_image);
	if ($this->form_validation->run()==false and empty($_FILES['userfile']['name'][0])) {
		# code...
		$error = array(
			'error_image' => 'Please choose image to upload',
			'error_name' => 'Please fill all input fields'
		);

		$this->load->view('templates/login_header');
		$this->load->view('startups/upload', $error);
		$this->load->view('templates/hub_startup_footer');
		
	}elseif ($this->form_validation->run()==true and empty($_FILES['userfile']['name'][0])) {
		# code...
		$error = array(
			'error_image' => 'Please choose image to upload',
			'error_name' => ''
		);

		$this->load->view('templates/login_header');
		$this->load->view('startups/upload', $error);
		$this->load->view('templates/hub_startup_footer');
	}elseif ($this->form_validation->run()==false and !empty($_FILES['userfile']['name'][0])) {
		# code...
		!$this->upload->data();
		$error = array(
			'error_image' => '',
			'error_name' => 'Please fill all input fields'
		);

		$this->load->view('templates/login_header');
		$this->load->view('startups/upload', $error);
		$this->load->view('templates/hub_startup_footer');
	}elseif ($this->form_validation->run()==true and !empty($_FILES['userfile']['name'][0])) {
		# code...
		$this->upload->do_upload();
		$data = array('upload_data' => $this->upload->data());
		$this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
		$startup = array(
			'name' => $this->input->post('name'),
			'brief' => $this->input->post('brief'),
			'description' => $this->input->post('description'),
			'startup_img' => $data['upload_data']['file_name'],
			'startup_head_img' => $data['upload_data']['file_name']
		);
		$this->load->model('startup_model');
		$this->startup_model->insert($startup);
		redirect('startups');
	}

}

/***** END OF UPLOAD STARTUP CODE */
	public function update(){
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}

        $data["title"] = 'Update Startup';
        
	}
}
