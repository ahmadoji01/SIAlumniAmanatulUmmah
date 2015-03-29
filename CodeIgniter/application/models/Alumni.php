<?php

	class Alumni extends CI_Model
	{
		private $username;
		private $password;
		private $nama;
		private $lembaga;
		private $cabang;
		private $namalengkap;
		private $tahunlulus;
		private $linkfoto;
		
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
		public function setTahunLulus($tahunlulus)
		{
			$this->tahunlulus = $tahunlulus;
		}
		public function setLinkFoto($linkfoto)
		{
			$this->linkfoto = $linkfoto;
		}
		public function getFromDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT Username, NamaLengkap, TahunLulus
						FROM Alumni
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
						FROM Alumni
						WHERE 
							Username = '$this->username'	
					");
			$this->db->close();
			return $query;
		}
		public function getFoto()
		{
			$link = '';
			$this->load->database();
			$query = $this->db->query
					("
						SELECT LinkFoto
						FROM Alumni
						WHERE 
							Username = '$this->username'	
					");
			$this->db->close();
			foreach($query->result() as $row):
				$link = $row->LinkFoto;
			endforeach;
			return $link;
		}
		public function setFoto()
		{
			$this->load->database();
			$query = $this->db->query
					("
						UPDATE Alumni
						SET LinkFoto = '$this->linkfoto'
						WHERE 
							Username = '$this->username'	
					");
			$this->db->close();
			return $query;
		}
		public function searchMhs($status)
		{
			$this->load->database();
			if($status == 1)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE 
							NamaLengkap Like '%$this->nama%'
					");
			}
			else if($status == 2)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE 
							Cabang = '$this->cabang'
					");
			}
			else if($status == 3)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE 
							Lembaga = '$this->lembaga'
					");
			}
			else if($status == 4)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE Lembaga = '$this->lembaga' AND
							Cabang = '$this->cabang'
					");
			}
			else if($status == 5)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap Like '%$this->nama%' AND
							Cabang = '$this->cabang'
					");
			}
			else if($status == 6)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap Like '%$this->nama%' AND
							Lembaga = '$this->lembaga'
					");
			}
			else if($status == 7)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap Like '%$this->nama%' AND
							Lembaga = '$this->lembaga' AND
							Cabang = '$this->cabang'
					");
			}
			else if($status == 8)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap = '$this->nama' AND
							Lembaga = '$this->lembaga' AND
							Cabang = '$this->cabang'
					");
			}
			else if($status == 9)
			{
				$query = $this->db->query
					("
						SELECT NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap Like '%$this->nama%' AND 
							TahunLulus = '$this->tahunlulus'
					");
			}
			
			
			$this->db->close();
			return $query;
		}
	}

?>