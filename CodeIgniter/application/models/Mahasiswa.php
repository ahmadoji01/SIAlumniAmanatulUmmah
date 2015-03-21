<?php

	class Mahasiswa extends CI_Model
	{
		private $username;
		private $password;
		private $nama;
		private $lembaga;
		private $cabang;
		private $namalengkap;
		
		public function __construct()
		{
			parent::__construct();
		}
		public function setUsername($username)
		{
			$this->username = $username;
		}
		public function setPassword($password)
		{
			$this->password = $password;
		}
		public function setName($nama)
		{
			$this->nama = $nama;
		}
		public function setLembaga($lembaga)
		{
			$this->lembaga = $lembaga;
		}
		public function setCabang($cabang)
		{
			$this->cabang = $cabang;
		}
		public function sendToDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT Username, NamaLengkap
						FROM Mahasiswa
						WHERE 
							Username = '$username' AND
							Password = '$password'	
					");
			$this->db->close();
			return $query;
		}
		public function searchMhs()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE 
							NamaLengkap = '$this->nama'
					");
			$this->db->close();
			return $query;
		}
	}

?>