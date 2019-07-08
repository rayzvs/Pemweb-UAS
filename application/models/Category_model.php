<?php

class Category_model extends CI_Model {

	// method untuk menampilkan data buku
	public function showCat($id = false){
		// membaca semua data kategori buku dari tabel 'kategori'
		if ($id == false){
			$query = $this->db->get('kategori');
			return $query->result_array();
		} else {
			// membaca data kategori buku berdasarkan id
			$query = $this->db->get_where('kategori', array("idkategori" => $id));
			return $query->row_array();
		}
	}

	// method untuk hapus data buku berdasarkan id
	public function delCat($id){
		$this->db->delete('kategori', array("idkategori" => $id));
	}

	// method untuk insert data kategori buku ke tabel 'kategori'
	public function insertCat($kategori){
		$data = array(
					"kategori" => $kategori
		);
		$query = $this->db->insert('kategori', $data);
	}

	public function updateCat($idkategori, $kategori){
		$data = array(
					"idkategori" => $idkategori,
					"kategori" => $kategori
		);
		$this->db->where('idkategori', $idkategori);
		$this->db->update('kategori', $data);
	}

}
?>