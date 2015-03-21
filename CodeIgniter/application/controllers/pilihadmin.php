<?php

	class pilihadmin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
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
				$this->load->view('view_tentangadmin',array('NamaLengkap' => $this->session->userdata('namalengkap')));
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		public function ubahdataadmin()
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
				$this->load->view('view_ubahdataadmin',array('NamaLengkap' => $this->session->userdata('namalengkap')));
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		public function tambahakun()
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
				$this->load->view('view_tambahakun',array('NamaLengkap' => $this->session->userdata('namalengkap')));
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		public function ubahdataalumni()
		{
			$this->load->model('Mahasiswa');
			$nama = $this->input->post('inputNama');
			$lembaga = $this->input->post('inputLembaga');
			$cabang = $this->input->post('inputCabang');
			$this->Mahasiswa->setName($nama);
			$this->Mahasiswa->setLembaga($lembaga);
			$this->Mahasiswa->setCabang($cabang);
			
			$this->load->library('session');
			$username = $this->session->userdata('username');
			
			$data['query'] = $this->Mahasiswa->searchMhs();
			$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			$data['NamaCari'] = $nama;
			$data['status'] = 0;
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if($username[0]=='A' && $nama == '' && $lembaga == '' && $cabang == '')
			{
				$data['status'] = 0;
				$this->load->view('view_caridataalumni', $data);
	
			}
			else if($username[0]=='A' && $data['query']->num_rows()>0)
			{
				$data['status'] = 1;
				$this->load->view('view_caridataalumni', $data);
	
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
	}
	
?>