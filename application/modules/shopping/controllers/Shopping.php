<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Shopping extends CI_Controller {
 		public function __construct(){
 			parent::__construct();
 			$this->load->library('cart');
 			$this->load->model('keranjang_model');
 			$this->load->library('pagination');
	
 		}
 		
 		public function index(){ 
 		//konfigurasi pagination
        $config['base_url'] = site_url('beranda/index'); //site url
        $config['total_rows'] = $this->db->count_all('produk'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       	= 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><a><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></a></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->keranjang_model->get_produk_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        $data['kategori'] = $this->keranjang_model->get_kategori_all();
        $this->load->view('themes/navbar',$data);
        $this->load->view('themes/kategori', $data); 
        $this->load->view('shopping/list_produk', $data);
        // $this->load->view('berandav',$data);
        
        $this->load->view('themes/footer', $data);
	} 

    public function per_kategori($kat){
        $data['prodkategori'] = $this->keranjang_model->get_per_kategori($kat);
        $this->load->view('themes/navbar',$data);
        $this->load->view('themes/kategori', $data); 
        $this->load->view('shopping/list_produk', $data);
        // $this->load->view('berandav',$data);
        
        $this->load->view('themes/footer', $data);
    }


 		public function tampil_cart(){
 			$data['kategori'] = $this->keranjang_model->get_kategori_all();
 			$this->load->view('themes/navbar',$data);
 			$this->load->view('shopping/tampil_cart',$data);
 			$this->load->view('themes/footer');
 		}
 
 		public function check_out(){
 			$data['kategori'] = $this->keranjang_model->get_kategori_all();
 			$this->load->view('themes/navbar',$data);
 			$this->load->view('shopping/check_out',$data);
 			$this->load->view('themes/footer');
 		}
 
 		public function detail_produk(){
 			$id=($this->uri->segment(3))?$this->uri->segment(3):0;
 			$data['kategori'] = $this->keranjang_model->get_kategori_all();
 			$data['detail'] = $this->keranjang_model->get_produk_id($id)->row_array();
 			$this->load->view('themes/navbar',$data);
 			$this->load->view('shopping/detail_produk',$data);
 			$this->load->view('themes/footer');
 		}
 
 		function tambah(){
 			$data_produk= array(
 				'id' => $this->input->post('id'),
	 			'name' => $this->input->post('nama'),
	 			'price' => $this->input->post('harga'),
				'gambar' => $this->input->post('gambar'),
	 			'qty' =>$this->input->post('qty'));
	 			$this->cart->insert($data_produk);
 			redirect('shopping');
 		}

 		function hapus($rowid){
 			if ($rowid=="all"){
 				$this->cart->destroy();
 			}else{
 				$data = array('rowid' => $rowid,
 				'qty' =>0);
 				$this->cart->update($data);
 			}
 			redirect('shopping/tampil_cart');
 		}
 
 		function ubah_cart(){
 			$cart_info = $_POST['cart'] ;
 			foreach( $cart_info as $id => $cart){
 				$rowid = $cart['rowid'];
 				$price = $cart['price'];
 				$gambar = $cart['gambar'];
 				$amount = $price * $cart['qty'];
 				$qty = $cart['qty'];
 				$data = array('rowid' => $rowid,
 				'price' => $price,
 				'gambar' => $gambar,
 				'amount' => $amount,
 				'qty' => $qty);
 				$this->cart->update($data);
 			}
 			redirect('shopping/tampil_cart');
 		}

 		public function proses_order(){
 
 //-------------------------Input data pelanggan-------------------------
 			$data_pelanggan = array('nama_pelanggan' => $this->input->post('nama'),
 			'email_pelanggan' => $this->input->post('email'),
 			'alamat_pelanggan' => $this->input->post('alamat'),
 			'telp_pelanggan' => $this->input->post('telp'));
 			$id_pelanggan = $this->keranjang_model->tambah_pelanggan($data_pelanggan);
 //-------------------------Input data order-----------------------------
 			$data_order = array('tanggal' => date('Y-m-d'),
 			'id_pelanggan' => $id_pelanggan);
 			$id_order = $this->keranjang_model->tambah_order($data_order);
 //-------------------------Input data detail order----------------------
 			if ($cart = $this->cart->contents()){
 				foreach ($cart as $item){
 					$data_detail = array(
 						'order_id'=>$id_order,
 						'produk' => $item['id'],
 						'qty' => $item['qty'],
 						'harga' => $item['price']);
 					$proses = $this->keranjang_model->tambah_detail_order($data_detail);
 				}
 			}
 //-------------------------Hapus shopping cart--------------------------
 			$this->cart->destroy();
 			$data['kategori'] = $this->keranjang_model->get_kategori_all();
 			$this->load->view('themes/navbar',$data);
 			$this->load->view('shopping/sukses',$data);
 			$this->load->view('themes/footer');
 		}
}
?>