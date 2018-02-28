<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
public function index()
	{
		if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="consulter";
	    $count_result=$this->db->count_all_results('articles');
	    $config["total_rows"]=$count_result;
	    $config['base_url']=base_url()."Admin/index";
	    $config["Full_tag_open"]="<div><ul class='pagination'>";
	    $config["Full_tag_close"]="</ul></div>";
	    $config["per_page"]=5;
	    $config["num_links"]=3;
	    $page=$this->uri->segment(3);
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	    $config['cur_tag_close'] = "<span class='sr_only'></span></li></a>";
	     $config['next_tag_open'] = '<li>';
	    $config['next_tagl_close'] = '</li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tagl_close'] = '</li>';
	     $config['first_tag_open'] = '<li>';
	    $config['first_tagl_close'] = '</li>';
	     $config['lastt_tag_open'] = '<li>';
	    $config['last_tagl_close'] = '</li>';

        $data['admin']=$this->Admin->get($config["per_page"],$page);
        $this->pagination->initialize($config);
		$this->load->view('agent/consulterag',$data);
	}


	public function add()
	{

     //if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="Ajout";
		
         $id=$this->session->userdata('Id_admin');
         $data['Admin']=$this->Admin->getwhere($id);
         $data['operations'] = $this->ord->getoperation();
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
		$this->load->library("Form_validation");
		if($this->input->post('ok')=='valider'){
          $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
           $this->form_validation->set_rules("type[]","type","required|callback_check_default");
             $this->form_validation->set_rules("operation[]","Operation","required|callback_check_default");
           $this->form_validation->set_rules("login","login","required|xss_clean");
          $this->form_validation->set_rules("mp","mp","required|xss_clean");
          $this->form_validation->set_rules("cin","cin","required|xss_clean");
           $this->form_validation->set_rules("telephone","telephone","required|xss_clean");
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
             'telephone'=>$this->input->post('telephone'),
             'adresse'=>$this->input->post('adresse'),
             'type'=>$this->input->post('type'),
             'cin'=>$this->input->post('cin'),
             'opr'=>$this->input->post('operation'),
             	'login'=>$this->input->post('login'),
             'mp'=>MD5($this->input->post('mp')),
              'img'=>$img
             

			);
		$req=$this->Admin->Add($data);
		if($req){
			redirect('Admin');
		}else{
			print($req);
		}
          }

	
	}





		$this->load->view('agent/ajoutag',$data);
	}
	public function add2()
	{

     //if(($this->session->userdata('is_logged'))==false){redirect('Login');}
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
             'telephone'=>$this->input->post('telephone'),
             'adresse'=>$this->input->post('adresse'),
             'type'=>$this->input->post('type'),
             	'login'=>$this->input->post('login'),
             'mp'=>MD5($this->input->post('mp')),
             'img'=>$img
             

			);
		$req=$this->Admin->Add($data);
		if($req){
			redirect('Dashboard');
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
		$id=$this->uri->segment(2);
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


 $this->load->library("Form_validation");
		if($this->input->post('update')=='modifier'){
          $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
           $this->form_validation->set_rules("type[]","type","required|callback_check_default");
             
           $this->form_validation->set_rules("login","login","required|xss_clean");
          $this->form_validation->set_rules("mp","mp","required|xss_clean");
           $this->form_validation->set_rules("telephone","telephone","required|xss_clean");
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
             'telephone'=>$this->input->post('telephone'),
             'adresse'=>$this->input->post('adresse'),
             'type'=>$this->input->post('type'),
             	'login'=>$this->input->post('login'),
             'mp'=>MD5($this->input->post('mp')),
              'img'=>$img

			);
          		
		$req=$this->Admin->update($data,$id);
		if($req){
			redirect('Admin/edit');
		}else{
			print_r($req);
		}
          }
	
	}
     
		$this->load->view('admin/profil',$data);
	}
	public function edit4(){
			if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
	 $data['title']="Modifier";
        $id=$this->uri->segment(2);
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

		if($this->input->post('update')=='modifier'){
          $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
           $this->form_validation->set_rules("type[]","type","required|callback_check_default");
             
           $this->form_validation->set_rules("login","login","required|xss_clean");
          $this->form_validation->set_rules("mp","mp","required|xss_clean");
           $this->form_validation->set_rules("telephone","telephone","required|xss_clean");
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
             'telephone'=>$this->input->post('telephone'),
             'adresse'=>$this->input->post('adresse'),
             'type'=>$this->input->post('type'),
             	'login'=>$this->input->post('login'),
             'mp'=>MD5($this->input->post('mp')),
              'img'=>$img

			);
          		
		$req=$this->Admin->update($data,$id);
		if($req){
			redirect('Admin');
		}else{
			print_r($req);
		}
          }
	
	}
     
		$this->load->view('agent/update',$data);
	}
	
public function edit2(){
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
 if($this->input->post('update')=='modifier'){
            $this->form_validation->set_rules("nom","nom","required|xss_clean");
          $this->form_validation->set_rules("prenom","prenom","required|xss_clean");
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
             'type'=>$this->input->post('type'),
             'telephone'=>$this->input->post('telephone'),
             'adresse'=>$this->input->post('adresse'),
             	'login'=>$this->input->post('login'),
             'mp'=>MD5($this->input->post('mp')),
             'img'=>$img 

			);
		$req=$this->Admin->update($data,$id);
		if($req){
			redirect('Admin/edit2');
		}else{
			print_r($req);
		}
          }
	
	}
      
      



		$this->load->view('agent/profilagent',$data);
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
			$query=$this->Admin->delete($id);
			redirect('Admin');

		}

	}

public function check_default($post_string){ 

return $post_string==' ' ? FALSE : TRUE;



}


}
