<?php
	class Form_model extends CI_Model{
		

		function simpan(
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
			$slug)
			{ 
				// $this->db->insert('pdf_files', $data);
				$hsl=$this->db->query("INSERT INTO peserta 
				(
					nama_tim,
					judul_karya,
					ketua_tim,
					alamat,
					no_hp,
					email,
					no_mahasiswa,
					universitas,
					jurusan,
					anggota_pertama,
					anggota_kedua,
					link_web,
					link_data,
					dokumen,
					tanggal,
					keterangan,
					slug
				) 
					VALUES 
					(
						'$nama_tim',
						'$judul_karya',
						'$ketua_tim',
						'$alamat',
						'$no_hp',
						'$email',
						'$no_mahasiswa',
						'$universitas',
						'$jurusan',
						'$anggota_pertama',
						'$anggota_kedua',
						'$link_web',
						'$link_data',
						'$dokumen',
						'$tanggalSekarang',
						'$keterangan',
						'$slug'
						)");
				return $hsl;
			}

			//blob
			// function simpan(
			// 	$nama_tim,
			// 	$judul_karya,
			// 	$ketua_tim,
			// 	$alamat,
			// 	$no_hp,
			// 	$email,
			// 	$no_mahasiswa,
			// 	$universitas,
			// 	$jurusan,
			// 	$anggota_pertama,
			// 	$anggota_kedua,
			// 	$link_web,
			// 	$link_data,
			// 	$dokumen,
			// 	$tanggalSekarang,
			// 	$keterangan,
			// 	$slug,
			// 	$blob)
			// 	{ 
			// 		// $this->db->insert('pdf_files', $data);
			// 		$file_blob_encoded = base64_encode($blob['file_blob']);
			// 		$hsl=$this->db->query("INSERT INTO peserta (
			// 			nama_tim,
			// 			judul_karya,
			// 			ketua_tim,
			// 			alamat,
			// 			no_hp,
			// 			email,
			// 			no_mahasiswa,
			// 			universitas,
			// 			jurusan,
			// 			anggota_pertama,
			// 			anggota_kedua,
			// 			link_web,
			// 			link_data,
			// 			dokumen,
			// 			tanggal,
			// 			keterangan,
			// 			slug,
			// 			cobapdf
			// 			) 
			// 			VALUES (
			// 				'$nama_tim',
			// 				'$judul_karya',
			// 				'$ketua_tim',
			// 				'$alamat',
			// 				'$no_hp',
			// 				'$email',
			// 				'$no_mahasiswa',
			// 				'$universitas',
			// 				'$jurusan',
			// 				'$anggota_pertama',
			// 				'$anggota_kedua',
			// 				'$link_web',
			// 				'$link_data',
			// 				'$dokumen',
			// 				'$tanggalSekarang',
			// 				'$keterangan',
			// 				'$slug',
			// 				-- '$file_blob_encoded'
			// 				)");
			// 		return $hsl;
			// 	}

			public function getTeams() {
				// Replace 'peserta' with your actual table name
				$this->db->select('nama_tim, judul_karya, ketua_tim, alamat, no_hp, email, no_mahasiswa, universitas, jurusan, anggota_pertama, anggota_kedua, link_web, link_data, dokumen, keterangan, slug');
				$query = $this->db->get('peserta');
				return $query->result();
			}

			public function get_peserta() {
				return $this->db->get('peserta')->result();
			}
		
			public function get_peserta_by_id($id) {
				return $this->db->where('id', $id)->get('peserta')->row();
			}
			



			function simpan2($namaDokumen)
				{ 
					$hsl=$this->db->query("INSERT INTO dokumenupload 
					(
						Nama_Dokumen
					) 
						VALUES (
							'$namaDokumen')");
					return $hsl;
				}
		
	}
?>