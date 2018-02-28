<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model','admin');
	}

	
	public function index()
	{
		$data=array();
		//$this->output->enable_profiler();
		if($this->input->post('btn')=='login'){

			$login=$this->input->post('login');
			$mp=$this->input->post('mp');
         //  $type="agent";
			$query=$this->admin->Login($login,$mp,"agent");
			$query2=$this->admin->Login($login,$mp,"chef");
			print_r($login);
			if($query  ){
				redirect('Dashboard2');
			}
          
			else{
				
			redirect('Dashboard');

			}
			if($query2  ){
				redirect('Dashboard');
			}
          
			else{
				
			redirect('Dashboard');

			}
}


		$this->load->view('login',$data);
	}
public function logout(){
	$this->session->sess_destroy();
	redirect('Login');
}
	
}
