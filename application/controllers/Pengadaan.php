<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengadaan extends CI_Controller
{
    public function index()
    {
        $data['judulhlm'] = 'Pengadaan | BDIBOOKSTORE';
        $this->load->view('layout/header', $data);
        $this->load->view('pengadaan');
        $this->load->view('layout/footer');
    }
}
