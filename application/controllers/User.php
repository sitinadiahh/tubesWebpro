<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        
        //Do your magic here
    }
    
    public function index()
    {
        
    }

    public function login(){
        $data = $this->m_user->getUserByEmail($this->input->post('email'));
        if($data['password'] == $this->input->post('password')){
            
            $this->session->set_userdata( 'email', $data['email'] );
            $this->session->set_userdata('id_user', $data['id_user']);
            redirect('post');
            
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('post');
    }

}

/* End of file User.php */
