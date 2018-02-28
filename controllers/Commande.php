<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commande extends CI_Controller {
	function construct(){
		parent::__construct();
		
	}
	public function index()
	{
		if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="consulter";
	    $count_result=$this->db->count_all_results('commandes');
	    $config["total_rows"]=$count_result;
	    $config['base_url']=base_url()."Commande/index";
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

        $data['commandes']=$this->cmd->get($config["per_page"],$page);
        $this->pagination->initialize($config);
		$this->load->view('commande/consultercmd',$data);
	}
	
       public function Add()	
      {
      		if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="Ajout";
		$data['articles'] = $this->cmd->getarticle();
   
		$this->load->library("Form_validation");
		
		if($this->input->post('add')=='ajouter'){
    
		  $this->form_validation->set_rules("libelle","libelle","required|xss_clean");
		     $this->form_validation->set_rules("article[]","article","required|callback_check_default");
          $this->form_validation->set_rules("datecommande","datecommande","required|xss_clean");
          $this->form_validation->set_rules("datelivraison","datelivraison","required|xss_clean");
          $this->form_validation->set_rules("quantite","quantite","required|xss_clean");


           $this->form_validation->set_message('check_default',"selectionnez le champ %s ");
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{
          		$data=array(
          	'libelle'=>$this->input->post('libelle'),
			'datecommande'=>$this->input->post('datecommande'),
            'datelivraison'=>$this->input->post('datelivraison'),
            'art'=>$this->input->post('article'),
            'quantite'=>$this->input->post('quantite')
             

			);
		$req=$this->cmd->Add2($data);
		if($req){
			redirect('Commande/?m=add');
		}else{
			
			print($req);
		}
          }
	
	}
		$this->load->view('commande/ajoutcmd',$data);
	}

	
	public function edit(){
			if(($this->session->userdata('is_logged'))==false){redirect('Login');}
		$data=array();
		$data['title']="Modifier";
		$id=$this->uri->segment(2);
		$data['Commande']=$this->cmd->getwhere($id);
		$data['articles'] = $this->cmd->getarticle();
   

		
		if($this->input->post('add')=='ajouter'){
    
		  $this->form_validation->set_rules("libelle","libelle","required|xss_clean");
		     $this->form_validation->set_rules("article[]","article","required|callback_check_default");
          $this->form_validation->set_rules("datecommande","datecommande","required|xss_clean");
          $this->form_validation->set_rules("datelivraison","datelivraison","required|xss_clean");
          $this->form_validation->set_rules("quantite","quantite","required|xss_clean");


           $this->form_validation->set_message('check_default',"selectionnez le champ %s ");
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
          if($this->form_validation->run()==False){
          	
          	$data["errors"]=validation_errors();
          	//print_r($data["errors"]);

          } else{
          		$data=array(
          	'libelle'=>$this->input->post('libelle'),
			'datecommande'=>$this->input->post('datecommande'),
            'datelivraison'=>$this->input->post('datelivraison'),
            'art'=>$this->input->post('article'),
            'quantite'=>$this->input->post('quantite')
             

			);
		$req=$this->cmd->update($data,$id);
		if($req){
			redirect('Commande/?m=add');
		}else{
			print($req);
		}
          }
	
	}
      
      



		$this->load->view('commande/update',$data);
	}
public function delete(){
		if(($this->session->userdata('is_logged'))==false){redirect('Login');}
	if($this->input->get('act')=='del'){
		$id=$this->input->get('id');
		$query=$this->cmd->delete($id);
		redirect('Commande/');
	}
}

public function Details(){
	if(($this->session->userdata('is_logged'))==FALSE){redirect('Login');}

	$data=array();
	$data['title']="Details";
	$id=$this->uri->segment(3);
	$data['Commande']=$this->cmd->getwhere($id);
	$this->load->view("commande/details",$data);
}

public function check_default($post_string){ 

return $post_string==' ' ? FALSE : TRUE;



}
}

