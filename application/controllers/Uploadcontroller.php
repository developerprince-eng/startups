<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uploadcontroller extends CI_Controller {

    public function index(){
        $error = array(
            'error_image' => '',
            'error_name' => ''
        );
        $this->load->view('startups/upload', $error);
    }

    //upload input and image files
    public function upload(){
        $this->load->helper(array('form', 'file', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('brief', 'Brief', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $config_image = array(
			'upload_path' => './image',
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

			$this->load->view('startups/upload', $error);
		}elseif ($this->form_validation->run()==true and empty($_FILES['userfile']['name'][0])) {
			# code...
			$error = array(
				'error_image' => 'Please choose image to upload',
				'error_name' => ''
			);

			$this->load->view('startups/upload', $error);
		}elseif ($this->form_validation->run()==false and !empty($_FILES['userfile']['name'][0])) {
			# code...
			!$this->upload->data();
			$error = array(
				'error_image' => '',
				'error_name' => 'Please fill all input fields'
			);
			$this->load->view('startups/upload', $error);
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
			$this->load->model('mymodel');
			$this->mymodel->insert($startup);
		}

    }

    	//resize image file
	public function image_resize($path, $file){
		
		$config_resize = array(
			'image_library' => 'gd2',
			'source_image' => $path,
			'create_thumb' => TRUE,
			'maintain_ratio' => TRUE,
			'width' => 75,
			'height' => 50,
			'new_image' => './image/thumb/'.$file
		);

		$this->load->library('image_lib', $config_resize);
		$this->image_lib->resize();


	}
    
}