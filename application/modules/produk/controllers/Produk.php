<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	} 
	
	public function index()
	{
		$data['produk'] = $this->m_account->tampil()->result();
		$this->load->view('produkv',$data);
	}

	function hapus($id_produk){
		$where = array('id_produk' => $id_produk);
		$this->m_account->hapus_data($where,'produk');
		redirect(base_url('produk'));
	}

	function edit($id_produk){
		$where = array('id_produk' => $id_produk);
		$data['produk'] = $this->m_account->edit_data($where,'produk')->result();
		$this->load->view('editv',$data);
	}

	function upload(){
			$config['upload_path']         	= 'gambar';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('new_gambar')) //sesuai dengan name pada form 
            {
                   	$id_produk = $this->input->post('id_produk');
        			$nama_produk = $this->input->post('nama_produk');
        			$deskripsi = $this->input->post('deskripsi');
        			$harga = $this->input->post('harga');
        			$gambar = $this->input->post('gambar');
        			$kategori = $this->input->post('kategori');
	 
				$data = array(
					'id_produk' 	=> $id_produk,
					'nama_produk' 	=> $nama_produk,
					'deskripsi' 	=> $deskripsi,
					'harga' 		=> $harga,
					'gambar' 		=> $gambar,
					'kategori' 		=> $kategori
			);
	 
				$where = array(
					'id_produk' => $id_produk
			);
	 
		$this->m_account->update_data($where,$data,'produk');
		redirect(base_url('produk')); 
            }
            else {
		$id_produk = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $harga = $this->input->post('harga');
        $gambar = $file['file_name'];
        $file = $this->upload->data();
        
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
       
		$data = array(
			'id_produk' 	=> $id_produk,
			'nama_produk' 	=> $nama_produk,
			'harga' 		=> $harga,
			'gambar' 		=> $gambar,
			'deskripsi'		=> $deskripsi,
			'kategori'		=> $kategori
			
			
		);
	 
		$where = array(
			'id_produk' => $id_produk
		);
	 
		$this->m_account->update_data($where,$data,'produk');
		redirect(base_url('produk'));
		}
	}
}
