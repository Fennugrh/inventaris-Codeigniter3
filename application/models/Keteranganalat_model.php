<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keteranganalat_model extends CI_Model
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
    public function hapus_t($id_lapor)
    {
        $this->db->where('id_lapor', $id_lapor);
        $this->db->delete('keteranganalat');
    }
    public function ambil_id($id_lapor)
    {
        return $this->db->get_where('keteranganalat', ['id_lapor' => $id_lapor])->row_array();
    }
    public function proses_tambah()
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang'),
            "nama" => $this->input->post('nama'),
            "tanggal" => $this->input->post('tanggal'),
            "status" => $this->input->post('status'),
            "keterangan" => $this->input->post('keterangan'),
        ];
        $this->db->insert('keteranganalat', $data);
    }
    public function proses_edit($id_lapor)
    {
        $data = [
            "kd_barang" => $this->input->post('kd_barang'),
            "nama" => $this->input->post('nama'),
            "tanggal" => $this->input->post('tanggal'),
            "status" => $this->input->post('status'),
            "keterangan" => $this->input->post('keterangan'),
        ];

        $this->db->where('id_lapor', $id_lapor);
        $this->db->update('keteranganalat', $data);
    }
}
