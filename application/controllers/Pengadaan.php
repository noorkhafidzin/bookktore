<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengadaan extends CI_Controller
{
    // ^ Load Adminmodel supaya bisa ambil data dari database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminmodel');
    }

    public function index()
    {
        $data['pengadaanbuku'] = $this->adminmodel->get_pengadaan_buku();
        $data['judulhlm'] = 'Kebutuhan Buku | BDIBOOKSTORE';
        $this->load->view('layout/header', $data);
        $this->load->view('pengadaan', $data);
        $this->load->view('layout/footer');
    }
}
