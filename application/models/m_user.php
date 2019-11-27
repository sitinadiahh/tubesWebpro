<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getUserByEmail($email){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email',$email);
        return $this->db->get()->row_array();
    }

    public function deleteUser($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    public function tambahUser(){
        $data= array{
            "nama" => $this->input->user('nama'),
            "email" => $this->input->user('email'),
            "password" => $this->input->user('password'),
            "gender" => $this->input->user('gender')
            
        };

        $this->db->insert('user' $data);
    }

    public function edituser($id_user){
        $data= array{
            "nama" => $this->input->user('nama'),
            "email" => $this->input->user('email'),
            "password" => $this->input->user('password'),
            "gender" => $this->input->user('gender')
            
        };

        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }
}

/* End of file ModelName.php */
