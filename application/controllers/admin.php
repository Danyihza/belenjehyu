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
        $uname = $this->input->post('uname');
        $pwd = $this->input->post('pwd');

        $user = $this->db->query("SELECT * FROM admin WHERE username ='$uname'")->row_array();
        if ($user) {
            if ($this->db->query("SELECT * FROM admin WHERE password ='$pwd'")->row_array()) {
                $data = $user['username'];
                $this->session->set_userdata('nama', $data);
                redirect('admin/mainmenu');
            } else {
                redirect('admin');
            }
        }
        $this->load->view('admin/auth');
    }

    public function mainmenu()
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
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $data['kategori'] = $this->admin_model->getAllKategori();
        $data['pedagang'] = $this->admin_model->getAllPedagang();
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
    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pedagang';
        $data['pedagang'] = $this->admin_model->getDetailById($id);
        $this->load->view('vendor/header', $data);
        $this->load->view('vendor/sidebar');
        $this->load->view('vendor/topbar');
        $this->load->view('admin/detail', $data);
        $this->load->view('vendor/footer');
    }
    public function hapus($id)
    {
        $this->admin_model->hapusdata($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin');
    }
    public function editdata($id)
    {
        $data['judul'] = 'BelenjehYu';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|numeric');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $nama = $this->input->post('nama');
        $kontak = $this->input->post('kontak');
        $tempat = $this->input->post('tempat');
        $kategori = $this->input->post('kategori');
        $data['kategori'] = $this->db->query("SELECT * FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori AND id_pedagang='$id'")->row_array();
        $data['user'] = $this->db->query("SELECT id_kategori,nama_kategori FROM kategori EXCEPT SELECT id_kategori,nama_kategori FROM pedagang INNER JOIN kategori WHERE pedagang.kategori = kategori.id_kategori AND id_pedagang='$id'")->result_array();
        // $data['user'] = $this->db->query("SELECT * FROM kategori")->result_array();
        $data['pedagang'] = $this->db->query("SELECT * FROM pedagang  WHERE id_pedagang='$id'")->row_array();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vendor/header', $data);
            $this->load->view('vendor/sidebar');
            $this->load->view('vendor/topbar');
            $this->load->view('admin/editdata');
            $this->load->view('vendor/footer');
        } else {
            $this->db->query("UPDATE pedagang SET nama_pedagang='$nama', kontak_pedagang='$kontak', tempat_pasar='$tempat', kategori='$kategori' 
            WHERE id_pedagang='$id'");
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('admin/mainmenu');
        }
    }
}
