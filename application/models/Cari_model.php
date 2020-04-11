<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari_model extends CI_Model
{
    public function cari(String $nama = null, String $kategori = null, String $pasar = null)
    {
        switch (TRUE) {
            case ($kategori == null):
                $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_pedagang LIKE '%$nama%' AND tempat_pasar = '$pasar' AND pedagang.kategori = kategori.id_kategori";
                break;
            case ($nama == null):
                $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori AND tempat_pasar = '$pasar'";
                break;
            case ($pasar == null):
                $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_pedagang LIKE '%$nama%' AND nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori";
                break;
            default:
                $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_pedagang LIKE '%$nama%' AND nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori AND tempat_pasar='$pasar'";
        }


        // if ($kategori == null) {
        //     $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_pedagang LIKE '%$nama%' AND tempat_pasar = '$pasar' AND pedagang.kategori = kategori.id_kategori";
        // } elseif ($nama == null) {
        //     $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori AND tempat_pasar = '$pasar'";
        // } elseif ($pasar == null) {
        //     $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_pedagang LIKE '%$nama%' AND nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori";
        if ($nama == null && $kategori == null) {
            $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE tempat_pasar ='$pasar' AND pedagang.kategori = kategori.id_kategori";
        } elseif ($nama == null && $pasar == null) {
            $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE kategori.nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori";
        } elseif ($kategori == null && $pasar == null) {
            $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_pedagang LIKE '%$nama%' AND pedagang.kategori = kategori.id_kategori";
        }
        // } elseif (isset($kategori) && isset($nama) && isset($pasar)) {
        //     $query = "SELECT * FROM pedagang INNER JOIN kategori WHERE nama_pedagang LIKE '%$nama%' AND nama_kategori = '$kategori' AND pedagang.kategori = kategori.id_kategori AND tempat_pasar='$pasar'";
        // }
        $result = $this->db->query($query);
        return $result->result_array();
    }
}
