<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model','admin');
	}

	
	public function index()
	{
		$data=array();
		$data['title']="Inscription";
		////$this->output->enable_profiler();
		if($this->input->post('btn')=='inscription'){

			$login=$this->input->post('inscription');
			$mp=$this->input->post('mp');

			$query=$this->admin->Inscription($mail,$mp);
			print_r($login);
			if($query){
				redirect('Login');
			}else{
				echo'erreur';

			}
}

		$this->load->view('inscription',$data);
	}
	
}