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

	public function penjurian()
	{
		// $this->load->view('penjurian_view');

		$data['peserta'] = $this->form_model->get_peserta(); // Replace with your model method

        // Load the view with the data
        $this->load->view('penjurian_view', $data);
		
	}

	public function get_peserta_detail() {
        $id = $this->input->post('id');
        $peserta = $this->form_model->get_peserta_by_id($id);
        echo json_encode($peserta);
    }
	
	public function get_peserta_by_id($id) {
		// Query your database to fetch the data for the given $id
		$data = $this->form_model->get_peserta_data($id);
	
		// Return the data as JSON
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	
	
	// function simpan(){
	// 		$config['upload_path'] = './assets/images/'; //path folder
	// 	    $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
	// 	    $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload
	// 		$config['max_size'] = 10240; //max file 10mb
	
	// 	    $this->upload->initialize($config);
	// 	    if(!empty($_FILES['fileDokumen']['name'])){
	
	// 			if ($this->upload->do_upload('fileDokumen')) {
	
	// 				if ($this->upload->do_upload('fileDokumen')){
	// 					$gbr = $this->upload->data();
	// 					$dokumen=$gbr['file_name']; //ambil nama file yang terupload enkripsi

	// 					// $dokumen=$this->input->post('Nama_Dokumen');
						
	
	// 					$this->form_model->simpan2(
						
	// 						$dokumen

	// 					); //simpan artikel ke database
	// 					redirect('welcome');
	// 				}else{
	// 					//redirect ke blog jika file gagal upload
	// 					redirect('error');
	// 				}
	
	// 			} else {
	// 				// File gagal diupload karena melebihi batas maksimum, tampilkan pesan kesalahan
	// 				redirect('error');
	// 			}	
						 
	// 	    }else{
	// 	    	//redirect ke blog jika file kosong
	// 			redirect('error');
	// 		}		
	// 	}

	function simpan(){
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload
		$config['max_size'] = 10240; //max file 10mb

	    $this->upload->initialize($config);	
	    if(!empty($_FILES['fileDokumen']['name'])){

			if ($this->upload->do_upload('fileDokumen')) {

				$gbr = $this->upload->data();
				//Compress Image
				// $config['image_library']='gd2';
				// $config['source_image']='./assets/images/'.$gbr['file_name'];
				// $config['create_thumb']= FALSE;
				// $config['maintain_ratio']= FALSE;
				// $config['quality']= '60%';
				// $config['width']= 710;
				// $config['height']= 420;
				// $config['new_image']= './assets/images/'.$gbr['file_name'];
				// $this->load->library('image_lib', $config);
				// $this->image_lib->resize();

				$dokumen=$gbr['file_name']; //ambil nama file yang terupload enkripsi
				$nama_tim=$this->input->post('nama_tim');
				$judul_karya=$this->input->post('judul_karya');
				$ketua_tim=$this->input->post('ketua_tim');
				$alamat=$this->input->post('alamat');
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
				$tanggalSekarang = date('Y-m-d');
				$keterangan=$this->input->post('keterangan');

				//Buat slug
				$string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul_karya); //filter karakter unik dan replace dengan kosong ('')
				$trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug

				//ubah pdf ke file blob
				// $upload_data = $this->upload->data();
				// $file_path = $upload_data['full_path'];
				
				// // Baca isi file PDF ke dalam blob
				// $file_blob = file_get_contents($file_path);
				
				// // Simpan blob ke dalam database lokal
				// $blob = array(
				// 	'file_blob' => $file_blob,
				// 	'file_name' => $upload_data['file_name'],
				// 	// Tambahkan kolom lain sesuai kebutuhan
				// );

				$this->form_model->simpan(
					$nama_tim,
					$judul_karya,
					$ketua_tim,
					$alamat,
					$no_hp,
					$email,
					$no_mahasiswa,
					$universitas,
					$jurusan,
					$anggota_pertama,
					$anggota_kedua,
					$link_web,
					$link_data,
					$dokumen,
					$tanggalSekarang,
					$keterangan,
					$slug, //simpan artikel ke database
					//$blob
				); 
				$this->load->view('file_upload_success'); // Buat view untuk menampilkan SweetAlert
				// redirect('welcome');

				//  // Email sending code
				//  $from_email = "jakartasatucoba@gmail.com"; // Replace with your email address
				//  $to_email = $this->input->post('email');
		 
				//  // Load the email library
				//  $this->load->library('email');
		 
				//  // Configure email parameters
				//  $this->email->from($from_email, 'Your Name');
				//  $this->email->to($to_email);
				//  $this->email->subject('Email Test');
				//  $this->email->message('Testing the email class.');
		 
				//  // Send the email
				//  if ($this->email->send()) {
				// 	 // Email sent successfully
				// 	 $this->session->set_flashdata("email_sent", "Email sent successfully.");
				//  } else {
				// 	 // Error in sending email
				// 	 $this->session->set_flashdata("email_sent", "Error in sending Email.");
				//  }
		 
				//  $this->load->view('welcome'); // You can replace this with your desired view
				//  // redirect('welcome'); // You can uncomment this if you want to redirect somewhere after sending the email

			} else {
				// File gagal diupload karena melebihi batas maksimum, tampilkan pesan kesalahan
				redirect('error');
			}	
	                 
	    }else{
	    	//redirect ke blog jika file kosong
			redirect('error');
		}		
	}
}
