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
			$this->load->model('Alumni');
			$nama = $this->input->post('inputNama');
			$lembaga = $this->input->post('inputLembaga');
			$cabang = $this->input->post('inputCabang');
			$this->Alumni->setName($nama);
			$this->Alumni->setLembaga($lembaga);
			$this->Alumni->setCabang($cabang);
			$data['debug'] = '';
			$this->load->library('session');
			$username = $this->session->userdata('username');
			
			if($nama == '' && $lembaga == '' && $cabang == '')
			{

				$data['query'] = $this->Alumni->searchMhs(7);
			}
			else if($nama != '' && $lembaga[0] == '-' && $cabang[0] == '-')
			{
				$data['query'] = $this->Alumni->searchMhs(1);
			}
			else if($nama == '' && $lembaga[0] == '-' && $cabang[0] != '-')
			{
				$data['query'] = $this->Alumni->searchMhs(2);
			}
			else if($nama == '' && $lembaga[0] != '-' && $cabang[0] == '-')
			{
				$data['query'] = $this->Alumni->searchMhs(3);
			}
			else if($nama == '' && $lembaga[0] != '-' && $cabang[0] != '-')
			{
				$data['query'] = $this->Alumni->searchMhs(4);
			}
			else if($nama != '' && $lembaga[0] == '-' && $cabang[0] != '-')
			{
				$data['query'] = $this->Alumni->searchMhs(5);
			}
			else if($nama != '' && $lembaga[0] != '-' && $cabang[0] == '-')
			{
				$data['query'] = $this->Alumni->searchMhs(6);
			}
			else if($nama == '' && $lembaga[0] == '-' && $cabang[0] == '-')
			{
				$data['query'] = $this->Alumni->searchMhs(8);
			}
			else
			{
				$data['query'] = $this->Alumni->searchMhs(7);
			}
			
			$data['NamaLengkap'] = $this->session->userdata('namalengkap');
			$data['NamaCari'] = $nama;
			$data['LembagaCari'] = $lembaga;
			$data['CabangCari'] = $cabang;
			$data['status'] = 0;
			if ($username==false)
			{
				$this->load->helper('url');
				redirect('home','location');
			}
			else if($username[0]=='A' && $nama == '' && ($lembaga == '' || $lembaga == '-')  && ($cabang == '' || $cabang == '-'))
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
				$data['status'] = 2;
				$this->load->view('view_caridataalumni', $data);
				//$this->load->helper('url');
				//redirect('home','location');
			}
		}
	}
	
?>