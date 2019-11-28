<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_post extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getPost(){
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('user','user.id_user = post.id_user');
        return $this->db->get()->result_array();
    }

    public function getPostById($id){
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('user','user.id_user = post.id_user');
        $this->db->where('id_post', $id);
        return $this->db->get()->result_array();
    }

    public function deletePost($id_post){
        $this->db->where('id_post', $id_post);
        $this->db->delete('post');
    }

    public function tambahPost($data){
        

        $this->db->insert('post', $data);
    }

    public function editPost($id_post){
        $data= array(
            "kategori"=> $this->input->post('kategori'),
            "judul"=> $this->input->post('judul'),
            "waktu_upload"=> $this->input->post('waktu_upload'),
            "gambar"=> $this->input->post('gambar'),
            "point"=> $this->input-->post('point'),
            "id_user"=> $this->input->post('id_user')
        );

        $this->db->where('id_post', $id_post);
        $this->db->update('post', $data);
    }
}

/* End of file ModelName.php */
