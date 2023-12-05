<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
    
    public function get($username){
        $this->db->where('Username', $username);
        $result = $this->db->get('users')->row(); 
        return $result;
    }

    public function get_all_users() {
        $result = $this->db->get('users')->result(); 
        return $result;
    }   
    public function delete_user($user_id) {
        $this->db->where('UserID', $user_id);
        $this->db->delete('users');
    }
    
    public function get_user_permission($username) {
        $this->db->where('Username', $username);
        $result = $this->db->get('users')->row(); 
        return $result ? $result->permission : null;
    }

}
?>