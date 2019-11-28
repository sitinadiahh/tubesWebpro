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

    public function detailPost($id){
        $content = $this->m_post->getPostById($id);
        $this->load->view('detailPost', $content);
        
    }

    public function aksi_upload(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			echo"GAGAL";
		}else{
            $data = array('upload_data' => $this->upload->data());
            $data2 = $this->upload->data();
            
            $data1= array(
                "kategori"=> $this->input->post('kategori'),
                "judul"=> $this->input->post('judul'),
                "gambar"=> $data2['file_name'],
                "id_user"=> $this->session->userdata('id_user')
            );

            $this->m_post->tambahPost($data1);

			redirect('post');
		}
	}

}

/* End of file Controllername.php */
