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
	}

?>