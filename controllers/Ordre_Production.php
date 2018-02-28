<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordre_Production extends CI_Controller {
    function construct(){
        parent::__construct();
        
    }
    public function index()
    {
          if(($this->session->userdata('is_logged'))==False){redirect("Login");}
        $data=array();
        $data['title']="consulter";
        $count_result=$this->db->count_all_results('ordre_productions');
        $config["total_rows"]=$count_result;
        $config['base_url']=base_url()."Ordre_Production/index";
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

        $data['ordre_productions']=$this->ord->get($config["per_page"],$page);
        $this->pagination->initialize($config);
        $this->load->view('ordre_production/consulterord',$data);
   
    }
public function index2()
    {  
          if(($this->session->userdata('is_logged'))==False){redirect("Login");}
        $data=array();
        $data['title']="consulter";
        $count_result=$this->db->count_all_results('ordre_productions');
        $config["total_rows"]=$count_result;
        $config['base_url']=base_url()."Ordre_Production/index2";
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

        $data['ordre_productions']=$this->ord->get($config["per_page"],$page);
        $this->pagination->initialize($config);
        $this->load->view('ordre_production/consulterord2',$data);
    }
public function index3()
    {  
          if(($this->session->userdata('is_logged'))==False){redirect("Login");}
        $data=array();
        $data['title']="consulter";
        $count_result=$this->db->count_all_results('ordre_productions');
        $config["total_rows"]=$count_result;
        $config['base_url']=base_url()."Ordre_Production/index3";
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

        $data['ordre_productions']=$this->ord->get($config["per_page"],$page);
        $this->pagination->initialize($config);
        $this->load->view('ordre_production/controler',$data);
    }
    
       public function Add()    
      {
         if($this->session->userdata("is_logged")==false){redirect("login");}
        $data=array();
        $data['title']="Ajout";
          $data['commandes'] = $this->ord->getcommande();
          
         // print_r($data['agents']);
        $this->load->library("Form_validation");
        if($this->input->post('add')=='ajouter'){
          $this->form_validation->set_rules("reference","reference","required|xss_clean");
          $this->form_validation->set_rules("commande[]","Commande","required|callback_check_default");
        
     
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
           $this->form_validation->set_message('check_default',"selectionnez le champ %s ");
          if($this->form_validation->run()==False){
            
            $data["errors"]=validation_errors();
            //print_r($data["errors"]);

          } else{
                $data=array(
            'reference'=>$this->input->post('reference'),
             'cmd'=>$this->input->post('commande')             
             
             

            );
        $req=$this->ord->Add6($data);
        if($req){
            redirect('Ordre_Production/?m=add');
        }else{
          
            print($req);
        }
          }
    
    }
        $this->load->view('ordre_production/ajoutord',$data);
    }
       public function Add2()    
      {
         if($this->session->userdata("is_logged")==false){redirect("login");}
        $data=array();
        $data['title']="Ajout";
   $data['title']="Details";
    $id=$this->uri->segment(3);
    $data["Ordre_Production"]=$this->ord->getwhere($id);
$data['commandes'] = $this->ord->getcommande();
$data['operations'] = $this->ord->getoperation();
         //print_r($data['agents']);
        $this->load->library("Form_validation");
        if($this->input->post('add')=='valider'){
          $this->form_validation->set_rules("reference","reference","required|xss_clean");
          $this->form_validation->set_rules("commande","commande","required|xss_clean");
          $this->form_validation->set_rules("operation[]","Operation","required|callback_check_default");
         $this->form_validation->set_rules("agent","agent","required|xss_clean");
       $this->form_validation->set_rules("tempsdebut","tempsdebut","required|xss_clean");
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
           $this->form_validation->set_message('check_default',"selectionnez le champ %s ");
          if($this->form_validation->run()==False){
            
            $data["errors"]=validation_errors();
            //print_r($data["errors"]);

          } else{
                $data=array(
            'reference'=>$this->input->post('reference'),
             'cmd'=>$this->input->post('commande'),             
             'opr'=>$this->input->post('operation'),
             'tempsdebut'=>$this->input->post('tempsdebut'),
             'ag'=>$this->input->post('agent')
             

            );
        $req=$this->ord->Add6($data);
        if($req){
            redirect('Ordre_Production');
        }else{
          
            print($req);
        }
          }
    
    }
        $this->load->view('ordre_production/Details_ordre',$data);
    }
    public function edit(){
          if(($this->session->userdata('is_logged'))==False){redirect("Login");}
        $data=array();
        $data['title']="Modifier";
        $id=$this->uri->segment(2);
        $data['Ordre_Production']=$this->ord->getwhere($id);
$data['commandes'] = $this->ord->getcommande();
$data['operations'] = $this->ord->getoperation();

 if($this->input->post('add')=='valider'){
         $this->form_validation->set_rules("reference","reference","required|xss_clean");
          $this->form_validation->set_rules("commande[]","Commande","required|callback_check_default");
           $this->form_validation->set_rules("operation[]","Operation","required|callback_check_default");
   
          $this->form_validation->set_message("required","vous devez remplir le champ %s");
           $this->form_validation->set_message('check_default',"selectionnez le champ %s ");
          if($this->form_validation->run()==False){
            
            $data["errors"]=validation_errors();
            //print_r($data["errors"]);

          } else{
               
            $data=array(
          'reference'=>$this->input->post('reference'),
             'cmd'=>$this->input->post('commande'),             
             'opr'=>$this->input->post('operation')
           

            );
        $req=$this->ord->update($data,$id);
        if($req){
            redirect('Dashboard2');
        }else{
            print($req);
        }
          }
    
    }
      
      



        $this->load->view('ordre_production/commencer',$data);
    }






    public function Details(){ 
        if(($this->session->userdata('is_logged'))==False){redirect("Login");}
        $data=array();
        $data['title']="Details";
        $id=$this->uri->segment(3);
        $data["Ordre_Production"]=$this->ord->getwhere($id);
        $this->load->view("ordre_production/details",$data);
    }

public function Details_ordre(){ 
    if(($this->session->userdata('is_logged'))==False){redirect("Login");}
    $data=array();
    $data['title']="Details";
    $id=$this->uri->segment(3);
    $data["Ordre_Production"]=$this->ord->getwhere($id);
    $this->load->view("ordre_production/Details_ordre",$data);
  }

    public function delete(){
        $data['title']="Delete";
         if(($this->session->userdata('is_logged'))==False){redirect("Login");}
        if($this->input->get('act')=='del')
        {
            $id=$this->input->get('id');
            $query=$this->ord->delete($id);
            redirect('Ordre_Production');

        }

    }


public function check_default($post_string){ 

return $post_string==' ' ? FALSE : TRUE;



}


}

