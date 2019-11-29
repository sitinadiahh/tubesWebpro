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
    public function signup(){
        $data = $this->m_user->getUserByNama($this->input->post('nama'));
        $data = $this->m_user->getUserByEmail($this->input->post('email'));
        $data = $this->m_user->getUserByPassword($this->input->post('password')); 
        redirect('home_user');
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
    public function comment(){
        $data = $this->m_comment->getCommentByIdComment($this->input->post('id_comment'));
        $data = $this->m_comment->getCommentByIdPost($this->input->post('id_post'));
        $data = $this->m_comment->getCommentByIdUser($this->input->post('id_user'));
        $data = $this->m_comment->getCommentByIsiComment($this->input->post('isi_comment'));
        $data = $this->m_comment->getCommentByWaktuComment($this->input->post('waktu_comment'));
    }

}

/* End of file User.php */
