<?php
    class home extends CI_Controller{
        public function view($home = 'home'){
            if(!file_exists(APPPATH. 'views/homes/'.$home. '.php')){
                show_404();
            }

            $data['title'] = ucfirst($home);

            $this->load->view('templates/header');
            $this->load->view('homes/'.$home, $data);
            $this->load->view('templates/footer');
        }
    }
 ?>
