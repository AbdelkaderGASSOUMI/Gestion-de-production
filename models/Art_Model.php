<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Art_Model extends CI_Model {
	protected $table='articles'; 
	
	public function Add1($data=array())
{
		$req=$this->db->insert('articles', $data);
		return$req;
	}
	

	public function get($lim1=null,$lim2=null){
	$query=$this->db->get($this->table,$lim1,$lim2)->result();
	return $query;
}

public function update($data,$id){
$this->db->where('Id_art', $id);
$query=$this->db->update($this->table, $data);
return $query;
}
public function getwhere($id){
$this->db->where('Id_art',$id);
$req=$this->db->get($this->table)->result();
return $req[0];
}
	

    public function delete($id){

    	$req=$this->db->delete($this->table,array("Id_art"=>$id));
    	return $req;
    }
	    





}
