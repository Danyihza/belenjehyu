<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{
    public function getAllPedagang(){
        $hasil = $this->db->query("SELECT * FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori ORDER BY nama_kategori");
        return $hasil->result_array();
    }
    public function getAllPedagang2(){
        $hasil = $this->db->query("SELECT * FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori ORDER BY id_pedagang desc");
        return $hasil->result_array();
    }
    public function getPedagangById($id){
        return $this->db->query("SELECT * FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori And pedagang.id_pedagang=$id")->row_array();
    }

    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function tambahdata()
    {
        $keterangan=0;
        $data = [
            "nama_pedagang" => $this->input->post('nama', true),
            "kontak_pedagang" => $this->input->post('kontak', true),
            "tempat_pasar" => $this->input->post('tempat', true),
            "kategori" => $this->input->post('kategori'),
            "status_akun" => $this->input->post('status_akun'),
            "detail_pedagang" => $this->input->post('detail_pedagang'),
            "keterangan" => $keterangan

        ];
        $this->db->insert('pedagang', $data);
    }
    public function tambahkat()
    {
        $data = [
            "nama_kategori" => $this->input->post('nama_kategori')
        ];
        $this->db->insert('kategori', $data);
    }

    public function hapusdata($id)
    {
        $this->db->where('id_pedagang', $id);
        $this->db->delete('pedagang');
    }
    public function hapuskat($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }
    public function getDetailById($id)
    {
        return $this->db->get_where('pedagang', ['id_pedagang' => $id])->row_array();
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    // public function editdataById($id)
    // {
    //     return $this->db->get_where('pedagang', ['id_pedagang' => $id])->row_array();
    //     $data = [
    //         "nama_pedagang" => $this->input->post('nama', true),
    //         "kontak_pedagang" => $this->input->post('kontak', true),
    //         "tempat_pasar" => $this->input->post('tempat', true),
    //         "kategori" => $this->input->post('kategori'),

    //     ];
    //     $this->db->update('pedagang', $data);
    // }
}
