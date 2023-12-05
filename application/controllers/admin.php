<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('AircraftModel');
		$this->load->model('RouteModel');


		$this->load->library('session');

	}

	public function index()
	{
		$data['users'] = $this->UserModel->get_all_users();
		$this->load->view('admin', $data);
	}

	public function user()
	{
		$data['users'] = $this->UserModel->get_all_users();
		$this->load->view('userlist', $data);
	}
	public function flight()
	{
		$data['aircrafts'] = $this->AircraftModel->get_all_aircraft();
		$this->load->view('flightlist', $data);
	}
	public function routes()
	{
		$data['aircrafts'] = $this->AircraftModel->get_all_aircraft();
		$data['routes'] = $this->RouteModel->get_all_route();

		$this->load->view('travelroutes', $data);
	}

	public function delete_user($user_id) {
        $this->load->model('UserModel'); // Load the model
        $this->UserModel->delete_user($user_id);

        redirect('admin/index'); 
    }

	
}