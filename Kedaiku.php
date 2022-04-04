<?php
class Kedaiku extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('m_crud');
	}
	function index(){
		$data['kedai']=$this->m_crud->m_lihat();
		$this->load->view('v_lihat',$data);
	}
	function tambah(){
		$this->load->view('v_tambah');
	}
	function tambah_act(){
		$data=array(
			'$id' => $this->input->post('id'),
			'nm_produk' => $this->input->post('nm_produk'),
			'hrg_jual' => $this->input->post('hrg_jual'),
			'jml_beli' => $this->input->post('jml_beli')			
			);
		$this->m_crud->m_tambah_act($data);	
		redirect(base_url().'kedaiku/');
	}
	function hapus($id){
		$data=array(
			'id' => $id
			);
		$this->m_crud->m_hapus($data);
		redirect(base_url().'kedaiku/');
	}
	function edit($id){
		$data=array(
			'id'=>$id
			);
		$data['data_edit']=$this->m_crud->m_edit($data);
		$this->load->view('v_edit',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$data=array(			
			'nm_produk'=>$this->input->post('nm_produk'),
			'hrg_jual'=>$this->input->post('hrg_jual'),
			'jml_beli'=>$this->input->post('jml_beli')
			);
		$this->m_crud->m_update($data,$id);
		redirect(base_url().'kedaiku/');
	}
}
?>