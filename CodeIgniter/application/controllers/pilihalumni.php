<?php

	class pilihalumni extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function profil()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
			
				$this->load->model('Alumni');
				$this->Alumni->setUsername($username);
				$query = $this->Alumni->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['NamaLengkap'] = $row->NamaLengkap;
						$notifikasi['Lembaga'] = $row->Lembaga;
						$notifikasi['Cabang'] = $row->Cabang;
						$notifikasi['AlamatSekarang'] = $row->AlamatSekarang;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['Email'] = $row->Email;
						$notifikasi['Facebook'] = $row->Facebook;
						$notifikasi['Twitter'] = $row->Twitter;
						$notifikasi['Blog'] = $row->Blog;
						
						$notifikasi['LinkFoto'] = $row->LinkFoto;
						
						$notifikasi['TempatKuliah'] = $row->TempatKuliah;
						$notifikasi['Kesibukan'] = $row->Kesibukan;
						$notifikasi['TempatKerja'] = $row->TempatKerja;
						$notifikasi['Hobi'] = $row->Hobi;
						$notifikasi['Cita_Cita'] = $row->Cita_Cita; 
						$notifikasi['Motto'] = $row->Motto;
						
						$notifikasi['Prestasi'] = $row->Prestasi;
						
						$notifikasi['NamaOrtu'] = $row->NamaOrtu;
						$notifikasi['PendidikanOrtu'] = $row->PendidikanOrtu;
						$notifikasi['PekerjaanOrtu'] = $row->PekerjaanOrtu;
						$notifikasi['KontakOrtu'] = $row->KontakOrtu;
					}
				}
				$this->load->view('view_profil', $notifikasi);
			}
		}
		public function tentang()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				
				$this->load->view('view_tentang', $notifikasi);
			}
		}
		public function ubahdatapribadi()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$notifikasi;
			
				$this->load->model('Alumni');
				$this->Alumni->setUsername($username);
				$query = $this->Alumni->getAllFromDatabase();
				if ($query->num_rows()>0)
				{
					foreach ($query->result() as $row)
					{
						//bukan pesan
						$notifikasi['Username'] = $row->Username;
						$notifikasi['Password'] = $row->Password;
						$notifikasi['NamaLengkap'] = $row->NamaLengkap;
						$notifikasi['NamaPanggilan'] = $row->NamaPanggilan;
						$notifikasi['JenisKelamin'] = $row->JenisKelamin;
						$notifikasi['TempatLahir'] = $row->TempatLahir;
						$notifikasi['TanggalLahir'] = $row->TanggalLahir;
						$notifikasi['Lembaga'] = $row->Lembaga;
						$notifikasi['TahunLulus'] = $row->TahunLulus;
						$notifikasi['Cabang'] = $row->Cabang;
						$notifikasi['AlamatAsal'] = $row->AlamatAsal;
						$notifikasi['AlamatSekarang'] = $row->AlamatSekarang;
						$notifikasi['Facebook'] = $row->Facebook;
						$notifikasi['Twitter'] = $row->Twitter;
						$notifikasi['Blog'] = $row->Blog;
						$notifikasi['Email'] = $row->Email;
						$notifikasi['NoHP'] = $row->NoHP;
						$notifikasi['Hobi'] = $row->Hobi;
						$notifikasi['Cita_Cita'] = $row->Cita_Cita; 
						$notifikasi['Motto'] = $row->Motto;
						$notifikasi['Prestasi'] = $row->Prestasi;
						$notifikasi['TempatKuliah'] = $row->TempatKuliah;
						$notifikasi['TempatKerja'] = $row->TempatKerja;
						$notifikasi['Kesibukan'] = $row->Kesibukan;
						$notifikasi['NamaOrtu'] = $row->NamaOrtu;
						$notifikasi['PendidikanOrtu'] = $row->PendidikanOrtu;
						$notifikasi['PekerjaanOrtu'] = $row->PekerjaanOrtu;
						$notifikasi['KontakOrtu'] = $row->KontakOrtu;
						//pesan error
						$notifikasi['nama_lengkap_kosong'] = $this->session->flashdata('nama_lengkap_kosong');
						$notifikasi['jenis_kelamin_kosong'] = $this->session->flashdata('jenis_kelamin_kosong');
						$notifikasi['nama_lembaga_kosong'] = $this->session->flashdata('nama_lembaga_kosong');
						$notifikasi['tahun_lulus_kosong'] = $this->session->flashdata('tahun_lulus_kosong');
						$notifikasi['username_kosong'] = $this->session->flashdata('username_kosong');
						$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
						$notifikasi['ulangi_password_kosong'] = $this->session->flashdata('ulangi_password_kosong');
						$notifikasi['nama_lembaga_tidak_terdaftar'] = $this->session->flashdata('nama_lembaga_tidak_terdaftar');
						$notifikasi['format_email_salah'] = $this->session->flashdata('format_email_salah');
						$notifikasi['username_sudah_ada'] = $this->session->flashdata('username_sudah_ada');
						$notifikasi['password_dan_ulangi_password_tidak_sama'] = $this->session->flashdata('password_dan_ulangi_password_tidak_sama');
					}
				}
				$this->load->view('view_ubahdatapribadi', $notifikasi);
			}
		}
		public function uploadfoto()
		{
			$this->load->model('Alumni');
			$this->load->library('session');
			$username = $this->session->userdata('username');
			$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			$this->Alumni->setUsername($username);
			$data['link'] = $this->Alumni->getFoto();
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) 
			{
				if(empty($_FILES["fileToUpload"]["name"]))
				{
					$data['status'] = 3;
				}
				else
				{
					$target_dir = realpath(__DIR__) . '/../../assets/profpic/';
					$linkfoto = '../../assets/profpic/' . basename($_FILES["fileToUpload"]["name"]);
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if($check !== false) {
						//echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					} else {
						//echo "File is not an image.";
						$uploadOk = 0;
					}
					// Check if file already exists
					if (file_exists($target_file)) {
						//echo "Sorry, file already exists.";
						$uploadOk = 0;
						$data['status'] = 2;
					}
					
					// Check file size
					if ($_FILES["fileToUpload"]["size"] > 350000) {
						//echo "Sorry, your file is too large.";
						$uploadOk = 0;
						$data['status'] = 4;
					}
					
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$uploadOk = 0;
						$data['status'] = 5;
					}
					
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk != 0) {
						if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
							$data['status'] = 1;
							$this->Alumni->setUsername($username);
							$this->Alumni->setLinkFoto($linkfoto);
							$this->Alumni->setFoto();
							$data['link'] = $linkfoto;
						} else {
							//echo "Sorry, there was an error uploading your file.";
							$data['status'] = 2;
						}
					}
				}
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else
				{
					$this->load->view('view_uploadfoto', $data);
				}
			}
			else
			{
				$data['status'] = 0;
				if ($username==false)
				{
					$this->load->helper('url');
					redirect('home','location');
				}
				else
				{
					$this->load->view('view_uploadfoto', $data);
				}
			}
		}
		public function caridataalumni()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			$this->load->model('Alumni');
			$nama = $this->input->post('inputNama');
			$tahunlulus = $this->session->userdata('tahunlulus');
			$this->Alumni->setName($nama);
			$this->Alumni->setTahunLulus($tahunlulus);
			$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			if($nama != '')
			{	
				$data['query'] = $this->Alumni->searchMhs(9);
			}
			$data['nama'] = $nama;
			$data['status'] = 0;
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($nama != '' && $data['query']->num_rows() > 0)
			{
				$data['status'] = 1;
				$this->load->view('view_carialumni', $data);
			}
			else
			{
				$data['status'] = 2;
				$this->load->view('view_carialumni', $data);
			}
		}
		public function do_ubahdatapribadi()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if ($username[0]=='A')
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
			else 
			{
				if ($this->input->post('namaLengkap')==''
				    || $this->input->post('inputJenisKelamin')==''
					|| $this->input->post('inputCabangLembaga')==''
					|| $this->input->post('tahunLulus')==''
					|| $this->input->post('inputUsername')==''
					|| $this->input->post('inputPassword')==''
					|| $this->input->post('inputUlangiPassword')=='')
				{
					if ($this->input->post('namaLengkap')=='') $this->session->set_flashdata('nama_lengkap_kosong','Nama Lengkap harus diisi');
					if ($this->input->post('inputJenisKelamin')=='') $this->session->set_flashdata('jenis_kelamin_kosong','Jenis Kelamin harus diisi');
					if ($this->input->post('inputCabangLembaga')=='') $this->session->set_flashdata('nama_lembaga_kosong','Nama Lembaga harus diisi');
					if ($this->input->post('tahunLulus')=='') $this->session->set_flashdata('tahun_lulus_kosong','Tahun Lulus harus diisi');
					if ($this->input->post('inputUsername')=='') $this->session->set_flashdata('username_kosong','Username harus diisi');
					if ($this->input->post('inputPassword')=='') $this->session->set_flashdata('password_kosong','Password harus diisi');
					if ($this->input->post('inputUlangiPassword')=='') $this->session->set_flashdata('ulangi_password_kosong','Ulangi/Konfirmasi Password harus diisi');
				
					$this->load->helper('url');
					redirect('pilihalumni/ubahdatapribadi','location');
				}
				
				if ($this->input->post('inputCabangLembaga')!='MA Unggulan Amanatul Ummah Surabaya'
				    && $this->input->post('inputCabangLembaga')!='MA Akselerasi Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='SMA Unggulan Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='MBI Amanatul Ummah Surabaya'
					&& $this->input->post('inputCabangLembaga')!='MA Akselerasi Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='MBI Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='SMA Berbasis Pesantren Amanatul Ummah Pacet'
					&& $this->input->post('inputCabangLembaga')!='SMA Bendungan Jati Hikmatul Amanah Pacet')
				{
					$this->session->set_flashdata('nama_lembaga_tidak_terdaftar','Nama Lembaga tidak terdaftar');
					
					$this->load->helper('url');
					redirect('pilihalumni/ubahdatapribadi','location');
				}
				
				$apakah_email_sah = false;
				$posisi_at;
				$banyak_at = 0;
				$panjang = strlen($this->input->post('inputEmail'));
				for ($i=0;$i<$panjang;$i++)
				{
					if ($this->input->post('inputEmail')[$i]=='@')
					{
						$posisi_at = $i;
						$banyak_at++;
						if ($banyak_at>1) break;
					}
				}
				if ($posisi_at==0)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihalumni/ubahdatapribadi','location');
				}
				else if ($posisi_at==($panjang-1))
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihalumni/ubahdatapribadi','location');
				}
				else if ($banyak_at>1)
				{
					$this->session->set_flashdata('format_email_salah','Format penulisan email salah');
					$this->load->helper('url');
					redirect('pilihalumni/ubahdatapribadi','location');
				}
				
				if ($this->input->post('inputPassword')!=$this->input->post('inputUlangiPassword'))
				{
					$this->session->set_flashdata('password_dan_ulangi_password_tidak_sama','Konfirmasi Password tidak sesuai');
					$this->load->helper('url');
					redirect('pilihalumni/ubahdatapribadi','location');
				}
				
				$this->load->model('Alumni');
				$this->Alumni->setUsername($this->input->post('inputUsername'));
				$this->Alumni->setPassword($this->input->post('inputPassword'));
				$this->Alumni->setNamaLengkap($this->input->post('namaLengkap'));
				$this->Alumni->setNamaPanggilan($this->input->post('namaPanggilan'));
				$this->Alumni->setJenisKelamin($this->input->post('inputJenisKelamin'));
				$this->Alumni->setTempatLahir($this->input->post('inputTempatLahir'));
				$this->Alumni->setTanggalLahir($this->input->post('inputTanggalLahir'));
				$this->Alumni->setLembaga($this->input->post('inputCabangLembaga'));
				$this->Alumni->setTahunLulus($this->input->post('tahunLulus'));
				$this->Alumni->setCabang($this->input->post('inputCabang'));
				$this->Alumni->setAlamatAsal($this->input->post('inputAlamatAsal'));
				$this->Alumni->setAlamatSekarang($this->input->post('inputAlamatSekarang'));
				$this->Alumni->setFacebook($this->input->post('inputLinkFB'));
				$this->Alumni->setTwitter($this->input->post('inputIDTwitter'));
				$this->Alumni->setBlog($this->input->post('inputAlamatBlog'));
				$this->Alumni->setEmail($this->input->post('inputEmail'));
				$this->Alumni->setNoHP($this->input->post('inputNoHP'));
				$this->Alumni->setHobi($this->input->post('inputHobi'));
				$this->Alumni->setCita_Cita($this->input->post('inputCita'));
				$this->Alumni->setMotto($this->input->post('inputMotto'));
				$this->Alumni->setPrestasi($this->input->post('inputPrestasi'));
				$this->Alumni->setTempatKuliah($this->input->post('inputKuliah'));
				$this->Alumni->setTempatKerja($this->input->post('inputBekerja'));
				$this->Alumni->setKesibukan($this->input->post('inputAktifOrganisasi'));
				$this->Alumni->setNamaOrtu($this->input->post('inputNamaOrangTua'));
				$this->Alumni->setPendidikanOrtu($this->input->post('inputPendidikanTerakhir'));
				$this->Alumni->setPekerjaanOrtu($this->input->post('inputPekerjaan'));
				$this->Alumni->setKontakOrtu($this->input->post('inputKontakOrtu'));
				
				$query = $this->Alumni->updateDatabase();
				$this->session->set_flashdata('ubah_data_pribadi_berhasil','Anda berhasil mengubah data pribadi anda');
				
				$this->load->helper('url');
				redirect('home','location');
			}
		}
	}
?>