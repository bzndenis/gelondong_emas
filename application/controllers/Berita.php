<?php 

class Home extends CI_Controller
{
	// View detail berita
	public function index()
	{
		$title = 'UKM COMMIT UIKA BOGOR';
		//add more function
		
		$data = [
			'title' => $title,
		];
		
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/detail-berita',$data);
		$this->load->view('templates/footer',$data);

		$this->load->helper('url');
		
	}
}

