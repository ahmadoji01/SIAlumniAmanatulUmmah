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
			else if ($username[0]=='A') 
			{
				$this->load->view('view_berandaadmin',array('NamaLengkap' => $this->session->userdata('namalengkap')));
			}
			else 
			{
				$this->load->view('view_beranda',array('NamaLengkap' => $this->session->userdata('namalengkap')));
			}
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
					//header('location : ../home');
					$this->load->helper('url');
					redirect('home','location');
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
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
					else 
					{
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
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
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
					else 
					{
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
				}
			}
			else if ($username[0]=='A')
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
			else 
			{
				//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
				$this->load->helper('url');
				redirect('home','location');
			}
		}
		function sign_out()
		{
			$this->load->library('session');
			$array_of_userdata = $this->session->all_userdata();
			$this->session->unset_userdata($array_of_userdata);
			//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
			$this->load->helper('url');
			redirect('home','location');
		}
	}

?>