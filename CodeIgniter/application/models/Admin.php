<?php

	class Admin extends CI_Model
	{
		private $username;
		private $password;
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
		public function setNamaLengkap($namalengkap)
		{
			$this->namalengkap = $namalengkap;
		}
		public function getFromDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT Username, Nama
						FROM Admin
						WHERE 
							Username = '$this->username' AND
							Password = '$this->password'	
					");
			$this->db->close();
			return $query;
		}
		public function getAllFromDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT *
						FROM Admin
						WHERE 
							Username = '$this->username'	
					");
			$this->db->close();
			return $query;
		}
		public function addToDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						INSERT INTO Admin
						VALUES
						(						
							'$this->username',
							'$this->password',
							'$this->namalengkap'
						)							
					");
			$this->db->close();
			return $query;
		}
		public function updateDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE Admin
						SET 
							Password = '$this->password',
							Nama = '$this->namalengkap'
						WHERE 
							Username = '$this->username'
					");
			$this->db->close();
			return $query;
		}
	}

?>