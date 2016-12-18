<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPengurusMasjid extends CI_Controller {

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
		$this->load->model('PengurusMasjidModel');
		$this->load->helper('url');
		$this->load->library('form_validation');
		if(!$this->session->Uu)
		{
			$this->session->meslog="Silahkan login terlebih dahulu";
			Redirect('auth/login');
		} 
	}


	public function addPengurusMasjid()
	{
		if($this->input->server("REQUEST_METHOD")=="POST")
		{
			$validation = array(
				    array(
				        'field' => 'namaPengurus',
				        'label' => 'Nama Pengurus', 
				        'rules' => 'required', 
				        'errors' => array('required' => 'Nama pengurus wajib diisi.',
				        				   
				        				 )
				    ),
				    array(
				        'field' => 'jabatanPengurus',
				        'label' => 'Jabatan Pengurus', 
				        'rules' => 'required', 
				        'errors' => array('required' => 'Jabatan pengurus wajib diisi.'
				        				 )
				    ),
				    array(
				        'field' => 'noTelpPengurus',
				        'label' => 'No Telp Pengurus', 
				        'rules' => 'required|is_natural', 
				        'errors' => array('required' => 'No Telp pengurus wajib diisi.',
				        					'is_natural' => 'No Telp Pengurus harus angka.'
				        				 )
				    ),
				    array(
				        'field' => 'alamatPengurus',
				        'label' => 'Alamat Pengurus', 
				        'rules' => 'required', 
				        'errors' => array('required' => 'Alamat pengurus wajib diisi.'
				        				 )
				    ),
				    array(
				        'field' => 'passwordPengurus',
				        'label' => 'Password Pengurus', 
				        'rules' => 'required', 
				        'errors' => array('required' => 'Password pengurus wajib diisi.'
				        				 )
				    )
				 );

			$this->form_validation->set_rules($validation);

			if($this->form_validation->run()==FALSE)
			{
				$this->session->meslog = validation_errors();
				redirect("ControllerPengurusMasjid");
			}
			else
			{
				$flagAddPengurus = $this->PengurusMasjidModel->addPengurusMasjid();
				if($flagAddPengurus)
				{
					if($flagAddPengurus->message)
					{
						$this->session->messageTambahSukses = 1;
						Redirect('ControllerPengurusMasjid/index');
					}
					else
					{
						$this->session->messageTambahGagal = 1;
						Redirect('ControllerPengurusMasjid/index');
					}
				}
				else
				{
					$this->session->meslog = "Tidak bisa memasukkan data ke database";
					redirect("ControllerPengurusMasjid");	
				}

			}
		}
	}

	public function index()
	{
		
		$data['header'] = $this->load->view('layout/head','',true);
		$data['navbar'] = $this->load->view('layout/navbar-dashboard','',true);
		$data['sidebar'] = $this->load->view('layout/sidebar','',true);
		$data['footer'] = $this->load->view('layout/footer-dashboard','',true);
		$this->load->view('ketua/mengelolaPengurus',$data);
	}

	public function isianEditPengurusMasjidById($id)
	{
		if($this->input->server("REQUEST_METHOD")=="POST"&&$this->input->post('jabatan')&&$this->input->post('id_pengurus')&&$this->input->post('nama_pengurus')&&$this->input->post('no_telp_pengurus')&&$this->input->post('alamat_pengurus'))
		{
			$data['jabatan'] = $this->input->post('jabatan');
			$data['id_pengurus'] = $this->input->post('id_pengurus');
			$data['nama_pengurus'] = $this->input->post('nama_pengurus');
			$data['no_telp_pengurus'] = $this->input->post('no_telp_pengurus');
			$data['alamat_pengurus'] = $this->input->post('alamat_pengurus');
			$data['idPengurus'] = $id;
			$data['header'] = $this->load->view('layout/head','',true);
			$data['navbar'] = $this->load->view('layout/navbar-dashboard','',true);
			$data['sidebar'] = $this->load->view('layout/sidebar','',true);
			$data['footer'] = $this->load->view('layout/footer-dashboard','',true);
			$this->load->view('ketua/updatePengurusMasjid',$data);
		}
		elseif ($this->input->server("REQUEST_METHOD")=="GET"&&$this->session->updateErr) {
			$data = $this->session->updateErr;
			$this->session->unset_userdata('updateErr');
			$data['header'] = $this->load->view('layout/head','',true);
			$data['navbar'] = $this->load->view('layout/navbar-dashboard','',true);
			$data['sidebar'] = $this->load->view('layout/sidebar','',true);
			$data['footer'] = $this->load->view('layout/footer-dashboard','',true);
			$this->load->view('ketua/updatePengurusMasjid',$data);
		}
		else Redirect('ControllerPengurusMasjid');
	}


	public function deletePengurusMasjidById()
	{
		if($this->input->server("REQUEST_METHOD")=="GET") Redirect('ControllerPengurusMasjid');
		else
		{
			$idPengurus = $this->input->post('idPengurus');
			$this->PengurusMasjidModel->deletePengurusMasjidById($idPengurus);


		}
	}




	public function getAllPengurusMasjid()
	{
		$dataPengurus = $this->PengurusMasjidModel->getAllPengurusMasjid();
		if($dataPengurus==NULL)
		{

		}
		else
		{
			//$data = array('data' => $dataPengurus);
			echo json_encode($dataPengurus);
		}
	}


	public function updatePengurusMasjidById()
	{
		if($this->input->server("REQUEST_METHOD")=="POST")
		{
			$validation = array(
					    array(
					        'field' => 'namaPengurus',
					        'label' => 'Nama Pengurus', 
					        'rules' => 'required', 
					        'errors' => array('required' => 'Nama pengurus wajib diisi.',
					        				   
					        				 )
					    ),
					    array(
					        'field' => 'jabatanPengurus',
					        'label' => 'Jabatan Pengurus', 
					        'rules' => 'required', 
					        'errors' => array('required' => 'Jabatan pengurus wajib diisi.'
					        				 )
					    ),
					    array(
					        'field' => 'noTelpPengurus',
					        'label' => 'No Telp Pengurus', 
					        'rules' => 'required|is_natural', 
					        'errors' => array('required' => 'No Telp pengurus wajib diisi.',
					        					'is_natural' => 'No Telp Pengurus harus angka.'
					        				 )
					    ),
					    array(
					        'field' => 'alamatPengurus',
					        'label' => 'Alamat Pengurus', 
					        'rules' => 'required', 
					        'errors' => array('required' => 'Alamat pengurus wajib diisi.'
					        				 )
					    )
				    );
				 

			$this->form_validation->set_rules($validation);


			$data['nama_pengurus'] = $this->input->post('namaPengurus');
			$data['jabatan'] = $this->input->post('jabatanPengurus');
			$data['no_telp_pengurus'] = $this->input->post('noTelpPengurus');
			$data['alamat_pengurus'] = $this->input->post('alamatPengurus');
			$data['id_pengurus'] = $this->input->post('idPengurus');

			
			if($this->form_validation->run()==FALSE)
			{
				$data['mesErr'] = validation_errors();
				$this->session->updateErr = $data;
				Redirect('ControllerPengurusMasjid/isianEditPengurusMasjidById/'.$data['id_pengurus']);
			}else
			{
				$flagUpdate = $this->PengurusMasjidModel->updatePengurusMasjidById($data);

				if($flagUpdate)
				{
					if($flagUpdate->message)
					{
						$this->session->messageUpdateSukses = 1;
						Redirect('ControllerPengurusMasjid/index');
					}
					else
					{
						$this->session->messageUpdateGagal = 1;
						Redirect('ControllerPengurusMasjid/index');
					}
				}
				else
				{
					$this->session->messageUpdateGagal = 1;
					Redirect('ControllerPengurusMasjid/index');
				}
			}
		}
	}
}
