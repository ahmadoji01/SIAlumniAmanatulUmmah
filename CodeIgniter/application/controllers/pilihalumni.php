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
	}
?>