<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) :
            $this->load->view('templates/header');
            $this->load->view('dashboard/index');
            $this->load->view('templates/footer');
        else :
            $this->session->set_flashdata('gagal', 'Silahkan login terlebih dahulu');
            redirect('home');
        endif;
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('sukses', 'Berhasil keluar');
        redirect('home');
    }
}
