<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller {
	function construct(){
		parent::__construct();
		
	}
	public function index()
	{
		$data=array();
		$data['title']="Ajout";
		
		$this->load->library("Form_validation");
		if($this->input->post('ok')=='valider'){
          $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
           $this->form_validation->set_rules("type[]","type","required|callback_check_default");
             
           $this->form_validation->set_rules("login","login","required|xss_clean");
          $this->form_validation->set_rules("mp","mp","required|xss_clean");
          $this->form_validation->set_rules("telephone","telephone","required|xss_clean");
          $this->form_validation->set_rules("cin","cin","required|xss_clean");
        $this->form_validation->set_rules("adresse","adresse","required|xss_clean");
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          $this->form_validation->set_message('check_default',"selectionnez type");
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{
          		$data=array(
			'nom'=>$this->input->post('nom'),
             'prenom'=>$this->input->post('prenom'),
             'type'=>$this->input->post('type'),
             'telephone'=>$this->input->post('telephone'),
             'cin'=>$this->input->post('cin'),
             'adresee'=>$this->input->post('adresee'),
             	'login'=>$this->input->post('login'),
             'mp'=>MD5($this->input->post('mp'))
             

			);
		$req=$this->Admin->Add($data);
		if($req){
			redirect('Login');
		}else{
			print($req);
		}
          }

	
	}

		$this->load->view('agent/consulterag',$data);
	}

	
       public function Add()	
      {
      	 if($this->session->userdata("is_logged")==false){redirect("login");}
		$data=array();
		$data['title']="Ajout";
		
		$this->load->library("Form_validation");
		if($this->input->post('add')=='ajouter'){
          $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
          $this->form_validation->set_rules("login","login","required|xss_clean");
          $this->form_validation->set_rules("mp","mp","required|xss_clean");
          $this->form_validation->set_rules("telephone","telephone","required|xss_clean");
          $this->form_validation->set_rules("cin","cin","required|xss_clean");
           $this->form_validation->set_rules("adresse","adresse","required|xss_clean");
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{
          		$data=array(
			'nom'=>$this->input->post('nom'),
             'prenom'=>$this->input->post('prenom'),
             'login'=>$this->input->post('login'),
             'cin'=>$this->input->post('cin'),
             'mp'=>$this->input->post('mp'),
             'adresse'=>$this->input->post('adresse'),
             'telephone'=>$this->input->post('telephone')
             

			);
		$req=$this->Admin->Add4($data);
		if($req){
			redirect('agent/ajoutag');
		}else{
			print($req);
		}
          }
	
	}
		$this->load->view('agent/ajoutag',$data);
	}
	public function edit(){
		  if(($this->session->userdata('is_logged'))==False){redirect("Login");}
		$data=array();
		$data['title']="Modifier";
		$id=$this->uri->segment(2);
		$data['admin']=$this->Admin->getwhere($id);

 if($this->input->post('update')=='modifier'){
          $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
          $this->form_validation->set_rules("login","login","required|xss_clean");
          $this->form_validation->set_rules("mp","mp","required|xss_clean");
           $this->form_validation->set_rules("cin","cin","required|xss_clean");
          $this->form_validation->set_rules("telephone","telephone","required|xss_clean");
           $this->form_validation->set_rules("adresse","adresse","required|xss_clean");

          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{
          		$data=array(
			'nom'=>$this->input->post('nom'),
             'prenom'=>$this->input->post('prenom'),
             'login'=>$this->input->post('login'),
             'mp'=>$this->input->post('mp'),
               'cin'=>$this->input->post('cin'),
              'adresse'=>$this->input->post('adresse'),
             'telephone'=>$this->input->post('telephone')
             

			);
		$req=$this->ag->update($data,$id);
		if($req){
			redirect('Admin/?m=add');
		}else{
			print($req);
		}
          }
	
	}
      
      



		$this->load->view('agent/update',$data);
	}


	public function Details(){ 
		if(($this->session->userdata('is_logged'))==False){redirect("Login");}
		$data=array();
		$data['title']="Details";
		$id=$this->uri->segment(3);
		$data["admin"]=$this->Admin->getwhere($id);
		$this->load->view("agent/details",$data);
	}



	public function delete(){
		$data['title']="Delete";
		 if(($this->session->userdata('is_logged'))==False){redirect("Login");}
		if($this->input->get('act')=='del')
		{
			$id=$this->input->get('id');
			$query=$this->ag->delete($id);
			redirect('Admin');

		}

	}





}

