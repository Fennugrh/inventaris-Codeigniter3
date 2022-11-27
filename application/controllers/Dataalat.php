<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataalat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dataalat_model');
        $this->model = $this->Dataalat_model;
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Alat';
        $data['dataalat'] = $this->db->get('inventaris')->result_array();
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('dataalat/index', $data);
        $this->load->view('layouts/footer');
    }
    public function hapus_t($id)
    {
        $this->Dataalat_model->hapus_t($id);
        redirect('Dataalat');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Alat';
        $data['dataalat'] = $this->db->get('inventaris')->result_array();
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('dataalat/tambah', $data);
        $this->load->view('layouts/footer');
    }

    public function proses_tambah()
    {
        $this->Dataalat_model->proses_tambah();
        redirect('Dataalat');
    }
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Alat';
        $data['inventaris'] = $this->Dataalat_model->ambil_id($id);
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('dataalat/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function proses_edit($id)
    {
        $this->Dataalat_model->proses_edit($id);
        redirect('Dataalat');
    }
}
