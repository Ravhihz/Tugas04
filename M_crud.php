<?php
class M_crud extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function m_lihat(){
		$lihat = $this->db->get('kedai');
		return $lihat->result();
 
	}
	function m_tambah_act($data){
		$this->db->insert('kedai',$data);
	}
	function m_hapus($data){
		$this->db->delete('kedai',$data);
	}
	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('kedai');
		return $edit->result();
	}
	function m_update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('kedai',$data);
	}
}
?>