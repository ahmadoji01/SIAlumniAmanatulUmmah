<?php
	class Alumni extends CI_Model
	{
		private $Username;
		private $Password;
		private $NamaLengkap;
		private $NamaPanggilan;
		private $JenisKelamin;
		private $TempatLahir;
		private $TanggalLahir;
		private $Lembaga;
		private $TahunLulus;
		private $Cabang;
		private $AlamatAsal;
		private $AlamatSekarang;
		private $Facebook;
		private $Twitter;
		private $Blog;
		private $Email;
		private $NoHP;
		private $Hobi;
		private $Cita_Cita;
		private $Motto;
		private $Prestasi;
		private $TempatKuliah;
		private $TempatKerja;
		private $Kesibukan;
		private $NamaOrtu;
		private $PendidikanOrtu;
		private $PekerjaanOrtu;
		private $KontakOrtu;
		private $LinkFoto;
		//private $TanggalUpdate;
		
		public function __construct()
		{
			parent::__construct();
		}
		public function setUsername($Username)
		{
			$this->Username = $Username;
		}
		public function setPassword($Password)
		{
			$this->Password = $Password;
		}
		public function setNamaLengkap($NamaLengkap)
		{
			$this->NamaLengkap = $NamaLengkap;
		}
		public function setNamaPanggilan($NamaPanggilan)
		{
			$this->NamaPanggilan = $NamaPanggilan;
		}
		public function setJenisKelamin($JenisKelamin)
		{
			$this->JenisKelamin = $JenisKelamin;
		}
		public function setTempatLahir($TempatLahir)
		{
			$this->TempatLahir = $TempatLahir;
		}
		public function setTanggalLahir($TanggalLahir)
		{
			$this->TanggalLahir = $TanggalLahir;
		}
		public function setLembaga($Lembaga)
		{
			$this->Lembaga = $Lembaga;
		}
		public function setTahunLulus($TahunLulus)
		{
			$this->TahunLulus = $TahunLulus;
		}
		public function setCabang($Cabang)
		{
			$this->Cabang = $Cabang;
		}
		public function setAlamatAsal($AlamatAsal)
		{
			$this->AlamatAsal = $AlamatAsal;
		}
		public function setAlamatSekarang($AlamatSekarang)
		{
			$this->AlamatSekarang = $AlamatSekarang;
		}
		public function setFacebook($Facebook)
		{
			$this->Facebook = $Facebook;
		}
		public function setTwitter($Twitter)
		{
			$this->Twitter = $Twitter;
		}
		public function setBlog($Blog)
		{
			$this->Blog = $Blog;
		}
		public function setEmail($Email)
		{
			$this->Email = $Email;
		}
		public function setNoHP($NoHP)
		{
			$this->NoHP = $NoHP;
		}
		public function setHobi($Hobi)
		{
			$this->Hobi = $Hobi;
		}
		public function setCita_Cita($Cita_Cita)
		{
			$this->Cita_Cita = $Cita_Cita;
		}
		public function setMotto($Motto)
		{
			$this->Motto = $Motto;
		}
		public function setPrestasi($Prestasi)
		{
			$this->Prestasi = $Prestasi;
		}
		public function setTempatKuliah($TempatKuliah)
		{
			$this->TempatKuliah = $TempatKuliah;
		}
		public function setTempatKerja($TempatKerja)
		{
			$this->TempatKerja = $TempatKerja;
		}
		public function setKesibukan($Kesibukan)
		{
			$this->Kesibukan = $Kesibukan;
		}
		public function setNamaOrtu($NamaOrtu)
		{
			$this->NamaOrtu = $NamaOrtu;
		}
		public function setPendidikanOrtu($PendidikanOrtu)
		{
			$this->PendidikanOrtu = $PendidikanOrtu;
		}
		public function setPekerjaanOrtu($PekerjaanOrtu)
		{
			$this->PekerjaanOrtu = $PekerjaanOrtu;
		}
		public function setKontakOrtu($KontakOrtu)
		{
			$this->KontakOrtu = $KontakOrtu;
		}
		public function setLinkFoto($LinkFoto)
		{
			$this->LinkFoto = $LinkFoto;
		}
		/*public function setTanggalUpdate($TanggalUpdate)
		{
			$this->TanggalUpdate = $TanggalUpdate;
		}*/

		
		public function addToDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						INSERT INTO Alumni
						VALUES
						(
							'$this->Username',
							'$this->Password',
							'$this->NamaLengkap',
							'$this->NamaPanggilan',
							'$this->JenisKelamin',
							'$this->TempatLahir',
							STR_TO_DATE('$this->TanggalLahir','%Y-%m-%d'),
							'$this->Lembaga',
							'$this->TahunLulus',
							'$this->Cabang',
							'$this->AlamatAsal',
							'$this->AlamatSekarang',
							'$this->Facebook',
							'$this->Twitter',
							'$this->Blog',
							'$this->Email',
							'$this->NoHP',
							'$this->Hobi',
							'$this->Cita_Cita',
							'$this->Motto',
							'$this->Prestasi',
							'$this->TempatKuliah',
							'$this->TempatKerja',
							'$this->Kesibukan',
							'$this->NamaOrtu',
							'$this->PendidikanOrtu',
							'$this->PekerjaanOrtu',
							'$this->KontakOrtu',
							'$this->LinkFoto',
							NOW()
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
						UPDATE Alumni
						SET
							Username = '$this->Username',
							Password = '$this->Password',
							NamaLengkap = '$this->NamaLengkap',
							NamaPanggilan = '$this->NamaPanggilan',
							JenisKelamin = '$this->JenisKelamin',
							TempatLahir = '$this->TempatLahir',
							TanggalLahir = STR_TO_DATE('$this->TanggalLahir','%Y-%m-%d'),
							Lembaga = '$this->Lembaga',
							TahunLulus = '$this->TahunLulus',
							Cabang = '$this->Cabang',
							AlamatAsal = '$this->AlamatAsal',
							AlamatSekarang = '$this->AlamatSekarang',
							Facebook = '$this->Facebook',
							Twitter = '$this->Twitter',
							Blog = '$this->Blog',
							Email = '$this->Email',
							NoHP = '$this->NoHP',
							Hobi = '$this->Hobi',
							Cita_Cita = '$this->Cita_Cita',
							Motto = '$this->Motto',
							Prestasi = '$this->Prestasi',
							TempatKuliah = '$this->TempatKuliah',
							TempatKerja = '$this->TempatKerja',
							Kesibukan = '$this->Kesibukan',
							NamaOrtu = '$this->NamaOrtu',
							PendidikanOrtu = '$this->PendidikanOrtu',
							PekerjaanOrtu = '$this->PekerjaanOrtu',
							KontakOrtu = '$this->KontakOrtu',
							LinkFoto = '$this->LinkFoto',
							TanggalUpdate = NOW()
						WHERE
							Username = '$this->Username'
					");
			$this->db->close();
			return $query;
		}
		public function getFromDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT Username, NamaLengkap, TahunLulus
						FROM Alumni
						WHERE 
							Username = '$this->Username' AND
							Password = '$this->Password'	
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
							Username = '$this->Username'	
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
		public function getUsernameFromDatabase()
		{
			$this->load->database();
			$query = $this->db->query
					("
						SELECT Username
						FROM Alumni
						WHERE 
							Username = '$this->Username'	
					");
			$this->db->close();
			return $query;
		}
		public function deleteThatUsernameFromDatabase($Username)
		{
			$this->Username = $Username;
			$this->load->database();
			$query = $this->db->query
					("
						DELETE FROM Alumni
						WHERE 
							Username = '$this->Username'	
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
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE 
							NamaLengkap Like '%$this->NamaLengkap%'
					");
			}
			else if($status == 2)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE 
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 3)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE 
							Lembaga = '$this->Lembaga'
					");
			}
			else if($status == 4)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE Lembaga = '$this->Lembaga' AND
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 5)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 6)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							Lembaga = '$this->Lembaga'
					");
			}
			else if($status == 7)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND
							Lembaga = '$this->Lembaga' AND
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 8)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap = '$this->NamaLengkap' AND
							Lembaga = '$this->Lembaga' AND
							Cabang = '$this->Cabang'
					");
			}
			else if($status == 9)
			{
				$query = $this->db->query
					("
						SELECT Username, NamaLengkap, Lembaga, Cabang, AlamatSekarang, NoHP, Email
						FROM Alumni
						WHERE NamaLengkap Like '%$this->NamaLengkap%' AND 
							TahunLulus = '$this->TahunLulus'
					");
			}
			$this->db->close();
			return $query;
		}
	}
?>