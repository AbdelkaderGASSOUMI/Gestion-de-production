<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

protected $table='admin'; 
protected $table2='operations';
public function Login($login,$password,$type){

$query=$this->db->get_where($this->table,array('login'=>$login,'mp'=>md5($password),'type'=>$type)); //md5 pour cripter les mot de passe
if($query->num_rows()==1){
//num_rows==1 s'il y a une ligne
$row=$query->result();
$row=$row['0'];
            $data=array(
	                 'Id_admin'=>$row->Id_admin,
	                 
	                 'nom'=>$row->nom,
	                 'prenom'=>$row->prenom,
	                  'opr'=>$row->opr,
	                  'img'=>$row->img,
	                 'is_logged'=> true //verification si l'admin saisir login w nn
	                 );
            $this->session->set_userdata($data);
            return true;

}
else{
	return false;
}
}



public function getoperation(){
	$query=$this->db->get($this->table2)->result();
	return $query;
}
	public function Add($data=array())
{
		$req=$this->db->insert('admin', $data);
		return$req;
	}

public function get($lim1=null,$lim2=null){
	$query=$this->db->get($this->table,$lim1,$lim2)->result();
	return $query;
}

public function update($data,$id){
$this->db->where('Id_admin', $id);
$query=$this->db->update($this->table, $data);
return $query;
}
public function getwhere($id){
$this->db->where('Id_admin',$id);
$req=$this->db->get($this->table)->result();
return $req;
}
	

    public function delete($id){

    	$req=$this->db->delete($this->table,array("Id_admin"=>$id));
    	return $req;
    }
	    




}