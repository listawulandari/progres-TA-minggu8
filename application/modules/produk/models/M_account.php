<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_account extends CI_Model{

	function tampil(){
		return $this->db->get('produk');
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
} 
?>