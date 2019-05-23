<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/index');
        $this->load->view('home/loginModal');
        $this->load->view('home/registerModal');
        $this->load->view('templates/footer');
    }

    public function register()
    {

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Gagal melakukan registrasi, pastikan email belum didaftarkan dan password minimal 6  karakter');
            redirect('home');
        } else {
            $reg = $this->UserModel->addUser();
            if ($reg) :
                $this->session->set_flashdata('sukses', 'Berhasil melakukan pendaftaran, silahkan login untuk memulai');
                redirect('home');
            else :
                $this->session->set_flashdata('gagal', 'Gagal melakukan registrasi, pastikan email belum didaftarkan dan password minimal 6  karakter');
                redirect('home');
            endif;
        }
    }

    public function login()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('gagal', 'Gagal login, pastikan email dan password benar');
            redirect('home');
        } else {
            $login = $this->UserModel->login();
            if ($login) :
                $this->session->set_userdata(['email' => $this->input->post(email)]);
                $this->session->set_flashdata('sukses', 'Berhasil Login');
                redirect('dashboard');
            else :
                $this->session->set_flashdata('gagal', 'Gagal login');
                redirect('dashboard');
            endif;
        }
    }
}
