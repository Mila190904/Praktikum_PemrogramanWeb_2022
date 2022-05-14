<?php
class Dosen_model extends CI_Model{
    public $nidn;
    public $pendidikan;

    public function getAll(){
        // Menampilkan seluruh data yang ada di tabel mahasiswa menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }

    public function getById($id){
        // Menampilkan data berdasarkan id
        $query = $this->db->get_where('dosen', ['id'=> $id]);
        return $query->row();
    }
}
?>