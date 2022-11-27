<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataalat_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function tampil($table)
    {
        return $this->db->get($table);
    }
    public function hapus_t($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('inventaris');
    }
    public function ambil_id($id)
    {
        return $this->db->get_where('inventaris', ['id' => $id])->row_array();
    }
    public function proses_tambah()
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang'),
            "nm_barang" => $this->input->post('nm_barang'),
            "jenis" => $this->input->post('jenis'),
        ];
        $this->db->insert('inventaris', $data);
    }
    public function proses_edit($id)
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang'),
            "nm_barang" => $this->input->post('nm_barang'),
            "jenis" => $this->input->post('jenis'),
        ];

        $this->db->where('id', $id);
        $this->db->update('inventaris', $data);
    }
}
