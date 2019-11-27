<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_post');
        //Do your magic here
    }
    

    public function index()
    {
        $content['posts'] = $this->m_post->getPost();
        $this->load->view('home', $content);
    }

    public function uploadPost(){
        $this->m_post->tambahPost();
        //$this->load->view('tambahPost');
        
    }

    public function detailPost($id){
        $content = $this->m_post->getPostById($id);
        $this->load->view('detailPost', $content);
        
    }

}

/* End of file Controllername.php */
