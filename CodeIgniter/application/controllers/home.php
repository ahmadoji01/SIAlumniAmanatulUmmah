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
			if ($username==false)
			{
				$notifikasi;
				//pesan gagal
				$notifikasi['username_kosong'] = $this->session->flashdata('username_kosong');
				$notifikasi['password_kosong'] = $this->session->flashdata('password_kosong');
				$notifikasi['username_password_salah'] = $this->session->flashdata('username_password_salah');
				//pesan berhasil
				$notifikasi['logout_berhasil'] = $this->session->flashdata('logout_berhasil');
				
				$this->load->view('view_login',$notifikasi);
			}
			else if ($username[0]=='A') 
			{
				$notifikasi;
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				//pesan berhasil
				$notifikasi['tambah_akun_admin_berhasil'] = $this->session->flashdata('tambah_akun_admin_berhasil');
				$notifikasi['tambah_akun_berhasil'] = $this->session->flashdata('tambah_akun_berhasil');
				
				$this->load->view('view_berandaadmin',$notifikasi);
			}
			else 
			{
				$notifikasi;
				//bukan pesan
				$notifikasi['NamaLengkap'] = $this->session->userdata('namalengkap');
				//pesan berhasil
				$notifikasi['ubah_data_pribadi_berhasil'] = $this->session->flashdata('ubah_data_pribadi_berhasil');
				
				$this->load->view('view_beranda',$notifikasi);
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
				if ($username=='' || $password=='')
				{
					if ($username=='') $this->session->set_flashdata('username_kosong','Maaf! Bagian username harus diisi');
					if ($password=='') $this->session->set_flashdata('password_kosong','Maaf! Bagian password harus diisi');
					//header('location : ../home');
					$this->load->helper('url');
					redirect('home','location');
				}
				else if ($username[0]=='A')
				{
					$this->load->model('Admin');
					$this->Admin->setUsername($username);
					$this->Admin->setPassword($password);
					$query = $this->Admin->getFromDatabase();
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
						$this->session->set_flashdata('username_password_salah','Maaf! Username atau password anda salah');
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
				}
				else
				{
					$this->load->model('Alumni');
					$this->Alumni->setUsername($username);
					$this->Alumni->setPassword($password);
					$query = $this->Alumni->getFromDatabase();
					if ($query->num_rows()>0)
					{
						foreach ($query->result() as $row)
						{
							$newdata = array(
										'username' => $row->Username,
										'namalengkap' => $row->NamaLengkap,
+										'tahunlulus' => $row->TahunLulus
											);
							$this->session->set_userdata($newdata);
						}
						//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
						$this->load->helper('url');
						redirect('home','location');
					}
					else 
					{
						$this->session->set_flashdata('username_password_salah','Maaf! Username atau password anda salah');
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
			//$array_of_userdata = $this->session->all_userdata();
			//$this->session->unset_userdata($array_of_userdata);
			$this->session->unset_userdata('username');
			$this->session->set_flashdata('logout_berhasil','Anda berhasil logout');
			//header('location : ../home'); nggak bisa gini kalo di CodeIgniter
			$this->load->helper('url');
			redirect('home','location');
		}
	}

?>