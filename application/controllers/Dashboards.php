<?php
/**
 * Created by Developer Prince
 * User: TechVillage Laptop01
 * Date: 11/07/2018
 * Time: 23:39
 */ 
ini_set("allow_url_fopen", 1);
 class newsfeeds extends CI_Controller{
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
        
        $url_xrate1 = 'https://exchangeratesapi.io/api/latest?base=USD';



        $response_2 = CallAPI(null, $url_xrate1, false);

        $response_1 = CallAPI(null, $url_g, false);

        $bit2usd = json_decode($response_2, true);
        
		$articles = json_decode($response_1, true);
    

        $data['btc2usd'] = $bit2usd;

		$data['articles'] = $articles;

		$data['title'] = 'News Feeds';

		

		$this->load->view('templates/newsfeeds_header');
		$this->load->view('newsfeeds/index', $data);
		$this->load->view('templates/newsfeeds_footer');
       
		
	}


 }