<?php
/**
* 
*/
class ControllerImam extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		#$this->load->model('PengurusMasjidModel');
		$this->load->helper('url');
		$this->load->library('form_validation');
		if(!$this->session->Uu)
		{
			$this->session->meslog="Silahkan login terlebih dahulu";
			Redirect('auth/login');
		} 
	}


	public function index()
	{
		$data['header'] = $this->load->view('layout/head','',true);
		$data['navbar'] = $this->load->view('layout/navbar-dashboard','',true);
		$data['sidebar'] = $this->load->view('layout/sidebar','',true);
		$data['footer'] = $this->load->view('layout/footer-dashboard','',true);
		$this->load->view('ketua/mengelolaImam',$data);
		# code...
	}


	public function isianEditJadwalImamById($id)
	{
		$data['header'] = $this->load->view('layout/head','',true);
		$data['navbar'] = $this->load->view('layout/navbar-dashboard','',true);
		$data['sidebar'] = $this->load->view('layout/sidebar','',true);
		$data['footer'] = $this->load->view('layout/footer-dashboard','',true);
		$this->load->view('ketua/updateJadwalImam',$data);
	}


	public function isianEditImamById($id)
	{
		$data['header'] = $this->load->view('layout/head','',true);
		$data['navbar'] = $this->load->view('layout/navbar-dashboard','',true);
		$data['sidebar'] = $this->load->view('layout/sidebar','',true);
		$data['footer'] = $this->load->view('layout/footer-dashboard','',true);
		$this->load->view('ketua/updateImamMasjid',$data);
	}
}