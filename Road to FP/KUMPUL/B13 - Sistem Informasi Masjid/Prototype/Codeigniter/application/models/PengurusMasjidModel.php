<?php
	/**
	* 
	*/
	class PengurusMasjidModel extends CI_Model
	{
			
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}


		public function getAllPengurusMasjid()
		{
			$queryGetPengurus = "SELECT pengurus.id_pengurus, pengurus.jabatan, pengurus.nama_pengurus ,pengurus.no_telp_pengurus, pengurus.alamat_pengurus from pengurus";
			$data = $this->db->query($queryGetPengurus);
			
			if($data->result()) return $data->result();
			else return NULL;


		}

		public function addPengurusMasjid()
		{
			$namaPengurus = $this->input->post('namaPengurus');
			$jabatanPengurus = $this->input->post('jabatanPengurus');
			$noTelpPengurus = $this->input->post('noTelpPengurus');
			$alamatPengurus = $this->input->post('alamatPengurus');
			$passwordPengurus = hash('sha256',$this->input->post('passwordPengurus'));

			//echo $namaPengurus.' '.$jabatanPengurus.' '.$noTelpPengurus.' '.$alamatPengurus.' '.$passwordPengurus;

			$flagAddPengurus = $this->db->query("CALL sp_tambahPengurus('".$jabatanPengurus."','".$namaPengurus."','".$noTelpPengurus."','".$alamatPengurus."', '".$passwordPengurus."')");

			if($flagAddPengurus->first_row()) return $flagAddPengurus->first_row();
			else return NULL;



		}

		public function deletePengurusMasjidById($idPengurus)
		{
			$this->db->query("DELETE from pengurus where id_pengurus = '".$idPengurus."'");
			return True;
		}

		public function updatePengurusMasjidById($data=NULL)
		{
			
			//id_pengurus varchar(5), jabatan varchar(10), nama_pengurus varchar(50), no_telp_pengurus varchar(15), alamat_pengurus varchar(200))
			$flagUpdatePengurus = $this->db->query("CALL sp_updatePengurus('".$data['id_pengurus']."','".$data['jabatan']."','".$data['nama_pengurus']."','".$data['no_telp_pengurus']."','".$data['alamat_pengurus']."')");

			if($flagUpdatePengurus->first_row()) return $flagUpdatePengurus->first_row();
			else return NULL;
		}

	}
?>