<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AircraftModel extends CI_Model {
    


    public function get_all_aircraft() {
        $result = $this->db->get('aircrafts')->result(); 
        return $result;
    }   
 
    

}
?>