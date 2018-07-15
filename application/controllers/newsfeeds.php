<?php
/**
 * Created by Developer Prince
 * User: TechVillage Laptop01
 * Date: 11/07/2018
 * Time: 23:39
 */ 

 class newsfeeds extends CI_Controller{
	public function index(){
		if(!$this->session->userdata('logged_in')){
			redirect('user');
		}
		
		/*
		$url = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=b5f55194d174421ab6ad8bf68d7fcc8b';
		$response = http_get($url, null, $info);
		print_r ($response);*/

		$url_g = 'https://newsapi.org/v2/everything?sources=the-economist&apiKey=b5f55194d174421ab6ad8bf68d7fcc8b';
		
		$response_1 = file_get_contents($url_g);
		
		$articles = json_decode($response_1, true);

		//Cryptocurrencies
		$url_cyrpto = 'https://marketdata.websol.barchart.com/getCrypto.json?apikey=71d5d6dbe1a36001cb49ab08a411bd35&symbols=%5EBTCUSD';

		$response_2 = file_get_contents($url_cyrpto);

		$cyrptocurrencys = json_decode($response_2, true);

		//var_dump($cyrptocurrencys);


		$data['articles'] = $articles;

		$data['title'] = 'News Feeds';

		

		$this->load->view('templates/newsfeeds_header');
		$this->load->view('newsfeeds/index', $data);
		$this->load->view('templates/newsfeeds_footer');
	}


 }