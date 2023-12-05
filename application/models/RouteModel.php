<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RouteModel extends CI_Model {
    


    public function get_all_route() {
        $result = $this->db->get('routes')->result(); 
        return $result;
    }   
 
    

}
?>