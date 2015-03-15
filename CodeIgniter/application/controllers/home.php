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
			
		}
	}

?>