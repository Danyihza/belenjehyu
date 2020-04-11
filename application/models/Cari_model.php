<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari_model extends CI_Model
{
    public function cari(String $nama = null, String $kategori = null)
    {
        if ($kategori == null) {
            # code...
            $query = "SELECT * FROM pedagang WHERE nama_pedagang LIKE '%$nama%' and keterangan=1";
        } elseif ($nama == null) {
            $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori and pedagang.keterangan=1";
        } else {
            $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_pedagang LIKE '%$nama%' AND nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori and pedagang.keterangan=1";
        }

        $result = $this->db->query($query);
        return $result->result_array();
    }
}
