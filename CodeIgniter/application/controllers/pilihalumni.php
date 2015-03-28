<?php

	class pilihalumni extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
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
		/*public function uploadfoto()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			$data['status'] = 0;
			$this->load->model('Alumni');
			$this->Alumni->setUsername($username);
			$data['link'] = $this->Alumni->getLinkFoto();
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else
			{
				$this->load->view('view_uploadfoto', $data);
			}
		}*/
		public function uploadfoto()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			
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
	}
?>