<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($nama,$username,$email,$password,$nomor)
	{
        $data_user = array(
			'Name'=>$nama,
			'username'=>$username,
			'email'=>$email,
            'password'=>$password,
			'PhoneNumber'=>$nomor
		);
		$this->db->insert('users',$data_user);
	}
	function aircraft($airname,$airtype,$aircap)
	{
        $data_aircraft = array(
			'AircraftName'=>$airname,
			'AircraftType'=>$airtype,
			'Capacity'=>$aircap
		);
		$this->db->insert('aircrafts',$data_aircraft);
	}
	function addbooking($route,$aircraft,$seatCount,$pricePerSeat,$totalPrice)
	{
        $data_booking = array(
			'AircraftName'=>$airname,
			'AircraftType'=>$airtype,
			'Capacity'=>$aircap
		);
		$this->db->insert('booking',$data_aircraft);
	}
	function route($departure,$arrival,$distance,$aircraft)
	{
        $data_aircraft = array(
			'OriginCity'=>$departure,
			'DestinationCity'=>$arrival,
			'Distance'=>$distance,
			'AircraftID'=>$aircraft
		);
		$this->db->insert('routes',$data_aircraft);
	}
}
?>