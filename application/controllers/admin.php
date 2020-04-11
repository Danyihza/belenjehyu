<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
                $this->session->set_userdata('nama',$data);
                redirect('admin/mainmenu');
            }else{
                redirect('admin');
            }
        }
        $this->load->view('admin/auth');
    }

    public function mainmenu()
    {
        $data['judul'] = 'BelenjehYu';
        $data['pedagang'] = $this->admin_model->getAllPedagang2();
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
        $this->form_validation->set_rules('kategori', 'Tempat', 'required');
        $this->form_validation->set_rules('status_akun', 'Status', 'required');
        $this->form_validation->set_rules('detail_pedagang', 'Detail', 'required');
        $data['kategori'] = $this->admin_model->getAllKategori();
        $data['pedagang'] = $this->admin_model->getAllPedagang();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vendor/header', $data);
            $this->load->view('vendor/sidebar');
            $this->load->view('vendor/topbar');
            $this->load->view('admin/tambah');
            $this->load->view('vendor/footer');
        } else {
            $uploadgambar = $_FILES['foto_kios']['name'];
            if ($uploadgambar) {
                # code...
                $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                $config['max_size'] = '5000';
                $config['upload_path'] = './assets/images/kios/';
    
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto_kios')) {
                    # code...
                    $img = $this->upload->data('file_name');
                    $this->db->set('foto_kios', $img);
                } else {
                    $this->session->set_flashdata('flash', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Pedagang Tidak Dapat Tersimpan, Tipe Gambar Tidak Sesuai
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
                );
                    redirect('admin/tambah');
                    //echo $this->upload->displays_errors();
                }
            }    
            $this->admin_model->tambahdata();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('admin/mainmenu');
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
        redirect('admin/mainmenu');
    }
    public function dataedit($id){
        $data['judul'] = 'Edit Data Barang';
        $data['qpedagang'] = $this->admin_model->getPedagangById($id);
        $data['kategori'] = $this->admin_model->getAllKategori($id);
            $this->load->view('vendor/header', $data);
            $this->load->view('vendor/sidebar');
            $this->load->view('vendor/topbar');
            $this->load->view('admin/editdata', $data);
            $this->load->view('vendor/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $data['judul'] = 'BelenjehYu';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|numeric');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('kategori', 'Tempat', 'required');
        $this->form_validation->set_rules('status_akun', 'Status', 'required');
        $this->form_validation->set_rules('detail_pedagang', 'Detail', 'required');
        $data['qpedagang'] = $this->admin_model->getPedagangById($id);
        $data['kategori'] = $this->admin_model->getAllKategori($id);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vendor/header', $data);
            $this->load->view('vendor/sidebar');
            $this->load->view('vendor/topbar');
            $this->load->view('admin/editdata');
            $this->load->view('vendor/footer');
        } else {
            $nama = $this->input->post('nama');
            $kontak = $this->input->post('kontak');
            $tempat = $this->input->post('tempat');
            $kategori = $this->input->post('kategori');
            $status = $this->input->post('status_akun');
            $detail = $this->input->post('detail_pedagang');
            $uploadgambar = $_FILES['foto_kios']['name'];

            if ($uploadgambar) {
                # code...
                $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                $config['max_size'] = '5000';
                $config['upload_path'] = './assets/images/kios/';
    
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto_kios')) {
                    # code...
                    $img = $this->upload->data('file_name');
                    $this->db->set('foto_kios', $img);
                } else {
                    $this->session->set_flashdata('flash', 
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Pedagang Tidak Dapat Tersimpan, Tipe Gambar Tidak Sesuai
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                    );
                    redirect('admin/editdata');
                    //echo $this->upload->displays_errors();
                }
            }
    
            $data = array(
                'nama_pedagang' => $nama,
                'kontak_pedagang' => $kontak,
                'tempat_pasar' => $tempat,
                'kategori' => $kategori,
                'status_akun' => $status,
                'detail_pedagang' => $detail
                );
     
            $where = array(
                'id_pedagang' => $id
            );
        
            $this->admin_model->update_data($where,$data,'pedagang');
            redirect('admin/mainmenu');
        }
    }
    public function daftar()
    {
        $data['judul'] = 'BelenjehYu';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|numeric');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('kategori', 'Tempat', 'required');
        $this->form_validation->set_rules('status_akun', 'Status', 'required');
        $this->form_validation->set_rules('detail_pedagang', 'Detail', 'required');
        $data['kategori'] = $this->admin_model->getAllKategori();
        $data['pedagang'] = $this->admin_model->getAllPedagang();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('daftar', $data);
        } else {
            $uploadgambar = $_FILES['foto_kios']['name'];
            if ($uploadgambar) {
                # code...
                $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
                $config['max_size'] = '5000';
                $config['upload_path'] = './assets/images/kios/';
    
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto_kios')) {
                    # code...
                    $img = $this->upload->data('file_name');
                    $this->db->set('foto_kios', $img);
                } else {
                    $this->session->set_flashdata('flash', 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Pedagang Tidak Dapat Tersimpan, Tipe Gambar Tidak Sesuai
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
                );
                    redirect('main/daftar');
                    //echo $this->upload->displays_errors();
                }
            }    
            $this->admin_model->tambahdata();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('main');
        }
    }

    function valid($id){

        $data = array(
            'keterangan' => 1
            );

        $where = array('id_pedagang' => $id);
        $this->admin_model->update_data($where,$data,'pedagang');
        redirect('admin/mainmenu');
    }
    function nvalid($id){

        $data = array(
            'keterangan' => 0
            );

        $where = array('id_pedagang' => $id);
        $this->admin_model->update_data($where,$data,'pedagang');
        redirect('admin/mainmenu');
    }
}
