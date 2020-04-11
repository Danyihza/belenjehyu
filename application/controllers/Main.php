<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->db->query('SELECT * FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori and pedagang.keterangan=1 ORDER BY kategori.nama_kategori ASC')->result_array();
		$data['pasar'] = $this->db->query('SELECT * FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori and pedagang.keterangan=1 GROUP BY pedagang.tempat_pasar ORDER BY pedagang.tempat_pasar ASC')->result_array();
		$data['kategori'] = $this->db->query('SELECT * FROM kategori')->result_array();
		$this->load->view('index', $data);
	}
	
	
	public function cari()
	{
		$search = $this->input->get('search');
		$kategori = $this->input->get('kategori');
		$pasar = $this->input->get('pasar');
		if ($search == "") {
			$search = null;
		}
		
		if (!$search && !$kategori && !$pasar) {
			redirect('main');
		} else {
			$data['pasar'] = $this->db->query('SELECT * FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori and pedagang.keterangan=1 GROUP BY pedagang.tempat_pasar ORDER BY pedagang.tempat_pasar ASC')->result_array();
			$data['kategori'] = $this->db->query('SELECT * FROM kategori')->result_array();
			$this->load->model('Cari_model', 'Cari');
			$data['user'] = $this->Cari->cari($search,$kategori,$pasar);

			$this->load->view('index', $data);
			$this->session->set_flashdata('flash', 'Daftar Pedangang');
		}
	}

	public function fdaftar(){
		$data['kategori'] = $this->db->query('SELECT * FROM kategori')->result_array();
		$this->load->view('daftar', $data);
	}
}