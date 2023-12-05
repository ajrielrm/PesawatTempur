<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('register');
	}

    public function proses()
	{
		    $nama = $this->input->post('name');
			$username = $this->input->post('username');
            $email = $this->input->post('email');
		    $password = $this->input->post('password');
		    $nomor = $this->input->post('phone');
			$this->auth->register($nama,$username,$email,$password,$nomor);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login');
	}   
	public function aircraft()
	{
		    $airname = $this->input->post('airname');
			$airtype = $this->input->post('airtype');
            $aircap = $this->input->post('aircap');
			$this->auth->aircraft($airname,$airtype,$aircap);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('flight');
	}   
	public function route()
	{
		    $departure = $this->input->post('departure');
			$arrival = $this->input->post('arrival');
            $distance = $this->input->post('distance');
			$aircraft = $this->input->post('aircraft');
			$this->auth->route($departure,$arrival,$distance,$aircraft);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('admin/routes');
	}   


	
}
