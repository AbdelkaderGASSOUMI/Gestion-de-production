<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminag extends CI_Controller {


	public function add()
	{

     //if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="Ajout";
		
		$this->load->library("Form_validation");
		if($this->input->post('ok')=='valider'){
          $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
            $this->form_validation->set_rules("cin","cin","required|xss_clean");
           $this->form_validation->set_rules("type[]","type","required|callback_check_default");
             $this->form_validation->set_rules("telephone","telephone","required|xss_clean");
          $this->form_validation->set_rules("adresse","adresse","required|xss_clean");
           $this->form_validation->set_rules("login","login","required|xss_clean");
          $this->form_validation->set_rules("mp","mp","required|xss_clean");
          
         
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          $this->form_validation->set_message('check_default',"selectionnez type");
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{
          		$data=array(
			'nom'=>$this->input->post('nom'),
             'prenom'=>$this->input->post('prenom'),
             'cin'=>$this->input->post('cin'),

             'type'=>$this->input->post('type'),
             'telephone'=>$this->input->post('telephone'),
             'adresse'=>$this->input->post('adresse'),
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





		$this->load->view('inscription',$data);
	}
public function edit(){
			if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="Profil";
		$id=$this->session->userdata('Id_admin');
		$data['Admin']=$this->Admin->getwhere($id);
		//upload img 
				    $config['upload_path']='image';
				    $config['file_name']=uniqid();
				    $config['allowed_types']='gif|jpg|jpeg|png';
				    $config['max_size']=255555555555555555555;
				    $this->load->library('upload',$config);
				    $this->upload->do_upload('image');
				     $dat=array('upload_data'=>$this->upload->data());
				     $img=$dat['upload_data']['file_name'];
				     if(!$this->upload->do_upload()){
				     	$error=array('error'=>$this->upload->display_errors());
				     }
             $id=$this->session->userdata('Id_admin');
    $data['Admin']=$this->Admin->getwhere($id);
 if($this->input->post('update')=='modifier'){
            $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
           $this->form_validation->set_rules("cin","cin","required|xss_clean");
           $this->form_validation->set_rules("type[]","type","required|callback_check_default");
             $this->form_validation->set_rules("telephone","telephone","required|xss_clean");
          $this->form_validation->set_rules("adresse","adresse","required|xss_clean");
           $this->form_validation->set_rules("login","login","required|xss_clean");
          $this->form_validation->set_rules("mp","mp","required|xss_clean");
          
         
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          $this->form_validation->set_message('check_default',"selectionnez type")
          
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{

          		$data=array(
				'nom'=>$this->input->post('nom'),
             'prenom'=>$this->input->post('prenom'),
              'cin'=>$this->input->post('cin'),
             'type'=>$this->input->post('type'),
             'telephone'=>$this->input->post('telephone'),
             'adresse'=>$this->input->post('adresse'),
             	'login'=>$this->input->post('login'),
             'mp'=>MD5($this->input->post('mp')),
             'img'=>$img 

			);
		$req=$this->Admin->update($data,$id);
		if($req){
			redirect('Adminag/edit');
		}else{
			print_r($req);
		}
          }
	
	}
      
      



		$this->load->view('agent/profilagent',$data);
	}
	


public function check_default($post_string){ 

return $post_string==' ' ? FALSE : TRUE;



}


}
