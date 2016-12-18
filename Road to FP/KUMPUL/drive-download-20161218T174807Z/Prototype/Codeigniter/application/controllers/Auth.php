<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('AuthModel');
	}

	public function index()
	{
		Redirect('auth/login');
	}

	public function login()
	{
		if($this->session->Uu) Redirect('dashboard');
		$data['header'] = $this->load->view('layout/head','',true);
		$this->load->view('auth/login',$data);
	}


	public function doLogin()
	{
		if($this->session->Uu) Redirect('dashboard');
		if($this->input->server('REQUEST_METHOD')=="POST")
		{
			
			$validation = array(
				    array(
				        'field' => 'idPengurus',
				        'label' => 'ID Pengurus', 
				        'rules' => 'required', 
				        'errors' => array('required' => 'Id pengurus wajib diisi.',
				        				   
				        				 )
				    ),
				    array(
				        'field' => 'passwordPengurus',
				        'label' => 'Password Pengurus', 
				        'rules' => 'required', 
				        'errors' => array('required' => 'Password wajib diisi.'
				        				 )
				    )
				 );

			$this->form_validation->set_rules($validation);

			if($this->form_validation->run()==FALSE)
			{
				$this->session->meslog = validation_errors();
				redirect("auth/login");
			}
			else
			{
				$userDatas = $this->AuthModel->login($this->input->post('idPengurus'), hash('sha256', $this->input->post('passwordPengurus')));
				if($userDatas==NULL)
				{
					$this->session->meslog = "Id atau password salah.";
					redirect('auth//login');
				}
				else
				{
					
					$userData = $arrayName = array('idPengurus' => $this->input->post('idPengurus') ,
					 								'namaPengurus' => $userDatas->nama_pengurus,
					 								'role' => $userDatas->jabatan
					 								);
					
					//var_dump($userData);
				

					$this->session->Uu = $userData;
					Redirect('dashboard');
				}
			}
		}
		else Redirect('auth/login');
	}

	public function logout()
	{
		$this->session->unset_userdata('Uu');
		Redirect(base_url());
	}

}
