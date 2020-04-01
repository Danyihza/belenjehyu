<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    public function index()
    {
        $data['judul'] = 'BelenjehYu';
        $data['pedagang'] = $this->admin_model->getAllPedagang();
        $this->load->view('vendor/header', $data);
        $this->load->view('vendor/sidebar');
        $this->load->view('vendor/topbar');
        $this->load->view('admin/index');
        $this->load->view('vendor/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'BelenjehYu';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|numeric');
        $data['kategori'] = $this->admin_model->getAllKategori();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vendor/header', $data);
            $this->load->view('vendor/sidebar');
            $this->load->view('vendor/topbar');
            $this->load->view('admin/tambah');
            $this->load->view('vendor/footer');
        } else {
            $this->admin_model->tambahdata();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin');
        }
    }
    public function hapus($id)
    {
        $this->admin_model->hapusdata($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin');
    }
}
