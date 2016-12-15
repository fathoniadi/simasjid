<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
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
		$this->load->view('dashboard/dashboard',$data);
	}
}
