<?php
    class Home extends CI_Controller{
        public function view($page = 'home'){
            if(!file_exists(APPPATH. 'views/pages/'.$page. '.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);

            $this->load->view('templates/header');
            $this->load->view('home/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }
 ?>