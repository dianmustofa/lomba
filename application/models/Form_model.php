<?php
class Form_model extends CI_Model{

	function simpan(
		$nama_tim,
		$judul_karya,
		$ketua_tim,
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
		$tanggal,
		$keterangan,
		$slug
		){ 
		$hsl=$this->db->query(
			"INSERT INTO peserta (
				nama_tim,
				judul_karya,
				ketua_tim,
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
				) VALUES (
					'$nama_tim',
					'$judul_karya',
					'$ketua_tim',
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
					'$tanggal',
					'$keterangan',
					'$slug'
				)
			");
		return $hsl;
	}
	
}