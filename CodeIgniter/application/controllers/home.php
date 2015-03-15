<?php

	class home extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false) $this->load->view('view_login');
			else if ($username[0]=='A') $this->load->view('view_berandaadmin');
			else $this->load->view('view_beranda');
		}
		function sign_in()
		{			
			$this->load->library('session');
			$username = $this->session->userdata('username');
			if ($username==false)
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				if ($username=='')
				{
					header('location : ../home');
				}
				else if ($username[0]=='A')
				{
					$this->load->model('Admin');
					$this->Admin->setUsername($username);
					$this->Admin->setPassword($password);
					$query = $this->Admin->sendToDatabase();
					if ($query->num_rows()>0)
					{
						foreach ($query->result() as $row)
						{
							$newdata = array(
										'username' => $row->Username,
										'namalengkap' => $row->Nama
											);
							$this->session->set_userdata($newdata);
						}
						header('location : ../home');
					}
					else 
					{
						header('location : ../home');
					}
				}
				else
				{
					$this->load->model('Mahasiswa');
					$this->Mahasiswa->setUsername($username);
					$this->Mahasiswa->setPassword($password);
					$query = $this->Mahasiswa->sendToDatabase();
					if ($query->num_rows()>0)
					{
						foreach ($query->result() as $row)
						{
							$newdata = array(
										'username' => $row->Username,
										'namalengkap' => $row->NamaLengkap
											);
							$this->session->set_userdata($newdata);
						}
						header('location : ../home');
					}
					else 
					{
						header('location : ../home');
					}
				}
			}
			else if ($username[0]=='A') header('location : ../home');
			else header('location : ../home');
		}
	}

?>