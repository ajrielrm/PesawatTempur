<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
      }
    
	public function index()
	{
        
		$this->load->view('login');
	}

    public function logout()
	{
        
        $this->session->sess_destroy();
        redirect('login');

	}

    public function register()
	{
        
		$this->load->view('login');
	}


    public function login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->UserModel->get($username);


        if(empty($user)){
            $this->session->set_flashdata('message','Username Tidak Ditemukan');
            redirect('auth');
        }
        else{
           if ($password == $user->Password){
                $session = array(
                    'authenticated'=>true, 
                    'username'=>$user->Username,  
                    'nama'=>$user->Name,
                    'permission' => $user->permission,
                    'UserID' => $UserID->UserID


                  );
                  $this->session->set_userdata($session);

                  if ($user->permission == 1) {
                    $this->session->set_flashdata('message','Username Tidak Ditemukan');
                    redirect('login');

                } else {
                    redirect('home');
                }
            }
            else{
                $this->session->set_flashdata('message', 'Password salah'); 
                redirect('auth');
        
        }
        
       
    }
 
    }
    public function admin_login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->UserModel->get($username);


        if(empty($user)){
            $this->session->set_flashdata('message','Username Tidak Ditemukan');
            redirect('auth');
        }
        else{
           if ($password == $user->Password){
                $session = array(
                    'authenticated'=>true, 
                    'username'=>$user->Username,  
                    'nama'=>$name->Name,
                    'permission' => $user->permission

                  );
                  $this->session->set_userdata($session);

                  if ($user->permission == !1) {
                    $this->session->set_flashdata('message','Username Tidak Ditemukan');
                    redirect('admin');

                } else {
                    redirect('admin/user');
                }
            }
            else{
                $this->session->set_flashdata('message', 'Password salah'); 
                redirect('auth');
        
        }
        
       
    }
 
    }
    
}
