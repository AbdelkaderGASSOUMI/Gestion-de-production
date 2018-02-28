<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmd_Model extends CI_Model {
	protected $table='commandes'; 
     
      protected $table1='articles';
      public function getarticle(){
	$query1=$this->db->get($this->table1)->result();
	return $query1;
}
   
	public function Add2($data=array()){
		$req=$this->db->insert($this->table, $data);
		return$req;
	}

public function get($lim1=null,$lim2=null){
	$query=$this->db->get($this->table,$lim1,$lim2)->result();
	return $query;
	}

public function update($data,$id){
$this->db->where('Id_cmd', $id);
$query=$this->db->update($this->table, $data);
return $query;
}
public function getwhere($id){
	$this->db->where('Id_cmd',$id);
	$req=$this->db->get($this->table)->result();
	return $req;
	}
 public function delete($id){

    	$req=$this->db->delete($this->table,array("Id_cmd"=>$id));
    	return $req;
    }


}