<?php
/**
 * Created by Developer Prince
 * User: TechVillage Laptop01
 * Date: 11/07/2018
 * Time: 23:39
 */ 
ini_set("allow_url_fopen", 1);
 class Dashboard extends CI_Controller{
	public function index(){
		
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}
		
        
        function CallAPI($method, $url, $data = false)
        {
            $curl = curl_init();

            switch ($method)
            {
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

        $url_g = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=2126e74d57f64166a50d6302a83c18be';
		
		$url_b = 'https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=b5f55194d174421ab6ad8bf68d7fcc8b';

		$response_3 = CallAPI(null, $url_b, false);

        $response_1 = CallAPI(null, $url_g, false);
        
		$articles = json_decode($response_1, true);
	
		$bbcs = json_decode($response_3, true);

		$num_su = $this->startup_model->get_startups_num();

		$num_usr = $this->user_model->get_user_num();

		$data['user'] = $num_usr;

		$data['startup'] = $num_su;

		$data['articles'] = $articles['articles'];

		$data['bbcs'] = $bbcs['articles'];

		$data['title'] = 'News Feeds';

		$this->load->view('templates/dashboard_header');
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/dashboard_footer');
       
		
	}

	public function globalnews(){
		
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}
		
		function CallAPI($method, $url, $data = false)
        {
            $curl = curl_init();

            switch ($method)
            {
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

		$url_g = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=2126e74d57f64166a50d6302a83c18be';

		$response_1 = CallAPI(null, $url_g, false);

		$articles = json_decode($response_1, true);

		$data['articles'] = $articles['articles'];

		$this->load->view('templates/dashboard_header');
		$this->load->view('dashboard/global', $data);
		$this->load->view('templates/dashboard_footer');
	}	

	public function localnews(){
		
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}
		

		$this->load->view('templates/dashboard_header');
		$this->load->view('dashboard/local');
		$this->load->view('templates/dashboard_footer');
	}

	public function market(){
		
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}
		
		function CallAPI($method, $url, $data = false)
        {
            $curl = curl_init();

            switch ($method)
            {
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

		$url_xrate1 = 'https://exchangeratesapi.io/api/latest?base=USD';

		$response_2 = CallAPI(null, $url_xrate1, false);

		$xrate = json_decode($response_2, true);

		$data['xrates'] = $xrate;

		$this->load->view('templates/dashboard_header');
		$this->load->view('dashboard/market', $data);
		$this->load->view('templates/dashboard_footer');
	}

	public function profile(){
		
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}
		

		$this->load->view('templates/dashboard_header');
		$this->load->view('dashboard/profile', $data);
		$this->load->view('templates/dashboard_footer');
	}

	public function startups(){
        
        
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}
        
        //Pagination Config 
		$config['base_url'] = base_url() . 'startup_cen/list';
		$config['total_rows'] = $this->db->count_all('startup');
		$config['per_page'] = 12;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'col');

		//Initialize Pagination
		$this->pagination->initialize($config);

		$data['title'] = 'Start ups';

		$data['startups'] = $this->startup_model->get_startups(FALSE, $config['per_page'], $offset);

		$this->load->view('templates/dashboard_header');
		$this->load->view('dashboard/list', $data);
		$this->load->view('templates/dashboard_footer');
    }
    public function delete_startup($id){
        $this->startup_model->delete($id);
        redirect('startup_cen/list');
        return true;
    }
    public function approve($id){
        $this->startup_model->approve($id);
        redirect('startup_cen/list');
        return true;
    }
    public function suspend($id){
        $this->startup_model->suspend($id);
        redirect('startup_cen/list');
        return true;
    }
 }
