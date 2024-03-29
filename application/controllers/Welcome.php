<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function setting(){
		$this->load->view('setting');
	}
	public function setting_password(){
		$this->load->view('setting_password');
	}
	public function setting_account(){
		$this->load->view('setting_account');
	}
	public function profile_user(){
		$this->load->view('profile_user');
	}
	public function post_user(){
		$this->load->view('post_user');
	}
	public function upvotes(){
		$this->load->view('upvotes');
	}
	public function comments_user(){
		$this->load->view('comments_user');
	}
	public function commentsTampilan(){
		$this->load->view('commentsTampilan');
	}
}
