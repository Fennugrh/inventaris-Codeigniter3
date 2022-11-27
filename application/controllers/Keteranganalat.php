<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keteranganalat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Keteranganalat_model');
        $this->model = $this->Keteranganalat_model;
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Keterangan Alat';
        $data['keteranganalat'] = $this->db->get('keteranganalat')->result_array();
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('keteranganalat/index', $data);
        $this->load->view('layouts/footer');
    }
    public function hapus_t($id_lapor)
    {
        $this->Keteranganalat_model->hapus_t($id_lapor);
        redirect('Keteranganalat');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Keterangan Alat';
        $data['keteranganalat'] = $this->db->get('keteranganalat')->result_array();
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('keteranganalat/tambah', $data);
        $this->load->view('layouts/footer');
    }

    public function proses_tambah()
    {
        $this->Keteranganalat_model->proses_tambah();
        redirect('Keteranganalat');
    }
    public function edit($id_lapor)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Keterangan Alat';
        $data['keteranganalat'] = $this->Keteranganalat_model->ambil_id($id_lapor);
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('keteranganalat/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function proses_edit($id_lapor)
    {
        $this->Keteranganalat_model->proses_edit($id_lapor);
        redirect('Keteranganalat');
    }
}
