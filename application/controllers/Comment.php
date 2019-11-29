<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_comment');
        //Do your magic here
    }
    
    public function index()
    {
        $content['comment'] = $this->m_comment->getComment($email);
        $this->load->view('post', $content);
    }

    public function tambahComment(){
        if($this->input->post('post')){
            $this->m_comment->tambahComment();
            redirect('comment');
        }
    }

}

/* End of file Comment.php */
