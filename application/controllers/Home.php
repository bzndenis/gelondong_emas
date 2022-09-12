<?php 

class Home extends CI_Controller
{
	// View Home
	public function index()
	{
		$title = 'UKM COMMIT UIKA BOGOR';
		//add more function
		
		$data = [
			'title' => $title,
		];
		
		$this->load->view('templates/header',$data);
		$this->load->view('index',$data);
		$this->load->view('templates/footer',$data);

		$this->load->helper('url');
		
	}
	
	function profil(){
		$title = 'Profil | UKM COMMIT UIKA BOGOR';
		$sub = 'Profil';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/profil',$data);
		$this->load->view('templates/footer',$data);
	}
	function sejarah(){
		$title = 'Sejarah | UKM COMMIT UIKA BOGOR';
		$sub = 'Sejarah UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/sejarah',$data);
		$this->load->view('templates/footer',$data);
	}
	function fasilitas(){
		$title = 'Fasilitas | UKM COMMIT UIKA BOGOR';
		$sub = 'Fasilitas di UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/fasilitas',$data);
		$this->load->view('templates/footer',$data);
	}
	function berita(){
		$title = 'Berita terkini | UKM COMMIT UIKA BOGOR';
		$sub = 'Berita Seputar UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/berita',$data);
		$this->load->view('templates/footer',$data);
	}
	function detail_berita(){
		$title = 'Berita | UKM COMMIT UIKA BOGOR';
		$sub = 'Berita';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/detail-berita',$data);
		$this->load->view('templates/footer',$data);
	}
	function struktural(){
		$title = 'Struktural | UKM COMMIT UIKA BOGOR';
		$sub = 'Struktur Organisasi UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/struktural',$data);
		$this->load->view('templates/footer',$data);
	}
	function ketum(){
		$title = 'Ketua Umum | UKM COMMIT UIKA BOGOR';
		$sub = 'Ketua Umum UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/ketum',$data);
		$this->load->view('templates/footer',$data);
	}
	function sekum(){
		$title = 'Sekretaris Umum | UKM COMMIT UIKA BOGOR';
		$sub = 'Sekretaris Umum UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/sekum',$data);
		$this->load->view('templates/footer',$data);
	}
	function bendum(){
		$title = 'Bendahara Umum | UKM COMMIT UIKA BOGOR';
		$sub = 'Bendahara Umum UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/bendum',$data);
		$this->load->view('templates/footer',$data);
	}
	function div_kerohanian(){
		$title = 'Divisi Kerohanian | UKM COMMIT UIKA BOGOR';
		$sub = 'Divisi Kerohanian UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/div-kerohanian',$data);
		$this->load->view('templates/footer',$data);
	}
	function div_ordat(){
		$title = 'Divisi Organisasi dan Data | UKM COMMIT UIKA BOGOR';
		$sub = 'Divisi Organisasi dan Data UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/div-ordat',$data);
		$this->load->view('templates/footer',$data);
	}
	function div_pdpl(){
		$title = 'Divisi Pendidikan dan Pelatihan | UKM COMMIT UIKA BOGOR';
		$sub = 'Divisi Pendidikan dan Pelatihan UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/div-pdpl',$data);
		$this->load->view('templates/footer',$data);
	}
	function div_jaringan(){
		$title = 'Divisi Jaringan dan Kelembagaan | UKM COMMIT UIKA BOGOR';
		$sub = 'Divisi Jaringan dan Kelembagaan UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/div-jaringan',$data);
		$this->load->view('templates/footer',$data);
	}
	function visimisi(){
		$title = 'Visi Misi | UKM COMMIT UIKA BOGOR';
		$sub = 'Visi dan Misi UKM Commit UIKA';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/visimisi',$data);
		$this->load->view('templates/footer',$data);
	}
	function proker(){
		$title = 'Program Kerja | UKM COMMIT UIKA BOGOR';
		$sub = 'Program Kerja UKM Commit UIKA';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/proker',$data);
		$this->load->view('templates/footer',$data);
	}
	function detail_csc(){
		$title = 'Commit Student Camp | UKM COMMIT UIKA BOGOR';
		$sub = 'Kegiatan Commit Student Camp';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/detail-csc',$data);
		$this->load->view('templates/footer',$data);
	}
	function detail_csi(){
		$title = 'Commit Sharing Information | UKM COMMIT UIKA BOGOR';
		$sub = 'Kegiatan Commit Sharing Information';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/detail-csi',$data);
		$this->load->view('templates/footer',$data);
	}
	function detail_cf(){
		$title = 'Commit Fest | UKM COMMIT UIKA BOGOR';
		$sub = 'Kegiatan Commit Fest';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/detail-cf',$data);
		$this->load->view('templates/footer',$data);
	}
	function detail_mubes(){
		$title = 'Musyawarah Besar | UKM COMMIT UIKA BOGOR';
		$sub = 'Kegiatan Musyawarah Besar UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/header',$data);
		$this->load->view('frontend/detail-mubes',$data);
		$this->load->view('templates/footer',$data);
	}
	function login(){
		$title = 'Login | UKM COMMIT UIKA BOGOR';
		$sub = 'UKM Commit';
		//add more function
		
		$data = [
			'title' => $title,
			'sub' => $sub,
		];
		$this->load->view('templates/login/header',$data);
		$this->load->view('backend/login',$data);
		$this->load->view('templates/login/footer',$data);
	}
}

