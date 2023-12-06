<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
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
		$data['route'] = $this->RouteModel->get_all_route();
		$data['aircrafts'] = $this->AircraftModel->get_all_aircraft();
		$this->load->view('booking', $data);

	}
	public function addBooking()
	{
		$selectedAircraftName = $this->input->post('aircraft');

		$selectedAircraftID = 0; 
		foreach ($aircraft as $row) {
   		 if ($row->AircraftName == $selectedAircraftName) {
        $selectedAircraftID = $row->AircraftID;
        break;
    		}
		}

		    $route = $this->input->post('route');
			$aircraft = $this->input->post('aircraft');
            $seatCount = $this->input->post('seatCount');
			$pricePerSeat = $this->input->post('pricePerSeat');
            $totalPrice = $this->input->post('totalPrice');

			$this->auth->addbooking($route,$aircraft,$seatCount,$pricePerSeat,$totalPrice);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('booking');
	}   

}
