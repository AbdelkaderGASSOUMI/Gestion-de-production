<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ord_Model extends CI_Model {
	protected $table='ordre_productions'; 
	protected $table1='commandes';
	protected $table2='operations';
		protected $table3='admin';
public function getcommande(){
	$query1=$this->db->get($this->table1)->result();
	return $query1;
}
public function getagent(){
	$query1=$this->db->get($this->table3)->result();
	return $query1;
}
public function getoperation(){
	$query=$this->db->get($this->table2)->result();
	return $query;
}
public function Add6($data=array())
{
		$req=$this->db->insert('ordre_productions', $data);
		return$req;
	}
	

	public function get($lim1=null,$lim2=null){
	$query=$this->db->get($this->table,$lim1,$lim2)->result();
	return $query;
}

public function update($data,$id){
$this->db->where('Id_ord', $id);
$query=$this->db->update('ordre_productions', $data);   
return $query;
}
public function getwhere($id){
$this->db->where('Id_ord',$id);
$req=$this->db->get($this->table)->result();
return $req[0];
}
	

    public function delete($id){

    	$req=$this->db->delete($this->table,array("Id_ord"=>$id));
    	return $req;
    }
	    





}
