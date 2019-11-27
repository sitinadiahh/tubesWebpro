<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_comment extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getComment($email){
        $this->db->select('*');
        $this->db->from('comment');
        return $this->db->get()->row_array();
    }

    public function deleteComment($id_comment){
        $this->db->where('id_comment', $id_comment);
        $this->db->delete('comment');
    }

    public function tambahComment(){
        $data= array{
            "id_post" => $this->input->post('id_post'),
            "id_user" => $this->input->post('id_user'),
            "password" => $this->input->post('password'),
            "isi_comment" => $this->input->post('isi_comment'),
            "waktu_comment" => $this->input->post('waktu_comment')
            
        };

        $this->db->insert('comment' $data);
    }

    public function editcomment($id_comment){
        $data= array{
            "id_post" => $this->input->post('id_post'),
            "id_user" => $this->input->post('id_user'),
            "password" => $this->input->post('password'),
            "isi_comment" => $this->input->post('isi_comment'),
            "waktu_comment" => $this->input->post('waktu_comment')
            
        };

        $this->db->where('id_comment', $id_comment);
        $this->db->update('comment', $data);
    }
    

}

/* End of file ModelName.php */
