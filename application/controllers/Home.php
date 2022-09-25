<?php 

class Home extends CI_Controller
{
	// View Home
	public function index()
	{
		$title = 'Gelondong Emas Leonardi';
		//add more function
		
		$data = [
			'title' => $title,
		];
		
		$this->load->view('templates/header',$data);
		$this->load->view('index',$data);
		$this->load->view('templates/footer',$data);

		$this->load->helper('url');
		
	}	

	public function sitemap()
	{
		$title = 'Gelondong Emas Leonardi | Sitemap';
		//add more function
		
		$this->load->view('sitemap.xml');

		$this->load->helper('url');
		
	}	
}

