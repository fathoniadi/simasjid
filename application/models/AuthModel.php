<?php
	/**
	* 
	*/
	class AuthModel extends CI_Model
	{
			
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}


		public function login($id_pengurus, $password)
		{
			$queryLogin = "SELECT nama_pengurus, jabatan from pengurus where id_pengurus = '".$id_pengurus."' and password_pengurus = '".$password."'";
			$data = $this->db->query($queryLogin);
			
			if($data->first_row()) return $data->first_row();
			else return NULL;


		}

	}
?>