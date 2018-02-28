<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	function construct(){
		parent::__construct();
		
	}
	public function index()
	{
		if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="consulter";
	    $count_result=$this->db->count_all_results('articles');
	    $config["total_rows"]=$count_result;
	    $config['base_url']=base_url()."Article/index";
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

        $data['articles']=$this->art->get($config["per_page"],$page);
        $this->pagination->initialize($config);
		$this->load->view('article/consulterart',$data);
	}
	
       public function Add()	
      {
      		if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="Ajout";
		
		$this->load->library("Form_validation");
		if($this->input->post('add')=='ajouter'){
         
          $this->form_validation->set_rules("designation","designation","required|xss_clean");
          $this->form_validation->set_rules("marque","Marque","required|xss_clean");
           $this->form_validation->set_rules("prix","Prix","required|xss_clean");
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{
          		$data=array(
			 
             'designation'=>$this->input->post('designation'),
           'prix'=>$this->input->post('prix'),
             'marque'=>$this->input->post('marque')
             

			);
		$req=$this->art->Add1($data);
		if($req){
			redirect('Article/?m=add');
		}else{
			print($req);
		}
          }
	
	}
		$this->load->view('article/ajoutart',$data);
	}
	public function edit(){
			if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="Modifier";
		$id=$this->uri->segment(2);
		$data['Article']=$this->art->getwhere($id);
		
  
 if($this->input->post('update')=='modifier'){
          $this->form_validation->set_rules("designation","designation","required|xss_clean");
          $this->form_validation->set_rules("marque","Marque","required|xss_clean");
           $this->form_validation->set_rules("prix","Prix","required|xss_clean");
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{
          		$data=array(
			 
             'designation'=>$this->input->post('designation'),
           'prix'=>$this->input->post('prix'),
             'marque'=>$this->input->post('marque')
             

			);
		$req=$this->art->update($data,$id);
		if($req){
			redirect('Article/?m=add');
		}else{
			print($req);
		}
          }
	
	}
      
      



		$this->load->view('article/update',$data);
	}

public function delete(){
		if(($this->session->userdata('is_logged'))==false){redirect('Login');}
	if($this->input->get('act')=='del'){
		$id=$this->input->get('id');
		$query=$this->art->delete($id);
		redirect('Article/');
	}
}

public function Details(){
	if(($this->session->userdata('is_logged'))==FALSE){redirect('Login');}

	$data=array();
	$data['title']="Details";
	$id=$this->uri->segment(3);
	$data['Article']=$this->art->getwhere($id);
	$this->load->view("article/details",$data);
}

}

