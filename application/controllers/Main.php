<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->db->query('SELECT * FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori ORDER BY kategori.nama_kategori ASC')->result_array();
		$data['kategori'] = $this->db->query('SELECT * FROM kategori')->result_array();
		$this->load->view('index', $data);
	}


	public function cari()
	{
		$search = $this->input->get('search');
		$kategori = $this->input->get('kategori');

		$data['kategori'] = $this->db->query('SELECT * FROM kategori')->result_array();
		$this->load->model('Cari_model', 'Cari');
		$data['user'] = $this->Cari->cari($search, $kategori);

		$this->load->view('index', $data);
	}
}
