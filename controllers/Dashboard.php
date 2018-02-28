<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['title']="Dashboard";

		if($this->session->userdata('is_logged')==true){
			$this->load->view('dashboard/dashboard',$data);
		}else{
			redirect('Login');
		}
		
	}
}
