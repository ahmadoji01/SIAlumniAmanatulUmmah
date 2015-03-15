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
	}

?>