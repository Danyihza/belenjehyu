<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari_model extends CI_Model
{
    public function cari(String $nama)
    {
        # code...
        $query ="SELECT * FROM pedagang WHERE nama_pedagang LIKE '%$nama%'";
        $result = $this->db->query($query);
        return $result->result_array();
    }
}
