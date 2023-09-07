<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('form_model');
        $this->load->library('upload');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function form()
	{
		$this->load->view('form_view');
	}

	function simpan(){
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $dokumen=$gbr['file_name']; //ambil nama file yang terupload enkripsi
                $nama_tim=$this->input->post('nama_tim');
				$judul_karya=$this->input->post('judul_karya');
                $ketua_tim=$this->input->post('ketua_tim');
				$no_hp=$this->input->post('no_hp');
				$email=$this->input->post('email');
				$no_mahasiswa=$this->input->post('no_mahasiswa');
				$universitas=$this->input->post('universitas');
				$jurusan=$this->input->post('jurusan');
				$anggota_pertama=$this->input->post('anggota_pertama');
				$anggota_kedua=$this->input->post('anggota_kedua');
				$link_web=$this->input->post('link_web');
				$link_data=$this->input->post('link_data');
				// $dokumen=$this->input->post('dokumen');
				$tanggal=$this->input->post('tanggal');
				$keterangan=$this->input->post('keterangan');

                //Buat slug
				$string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul_karya); //filter karakter unik dan replace dengan kosong ('')
				$trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug

				$this->form_model->simpan($nama_tim,$judul_karya,$ketua_tim,$no_hp,$email,$no_mahasiswa,$universitas,$jurusan,$anggota_pertama,$anggota_kedua,$link_web,$link_data,$dokumen,$tanggal,$keterangan,$slug); //simpan artikel ke database
				redirect('welcome');
			}else{
				//redirect ke blog jika gambar gagal upload
				redirect('error');
		    }
	                 
	    }else{
	    	//redirect ke blog jika gambar kosong
			redirect('error');
		}		
	}
}
