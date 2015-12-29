<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->lang->load(array('common', 'admin'));
        $this->load->model('user');
    }

    public function index() {
        $this->load->view('layout/admin_header');
        $this->load->view('admin/index');
        $this->load->view('layout/admin_footer');
    }

    public function login() {
        $this->load->view('admin/login', array('title' => lang('login_title')));
    }

    public function auth() {
        if ($this->input->method() != 'post') show_404();

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($this->user->login($email, sha1($password))) {
            echo 'ok';
            exit;
        }

        $this->session->set_flashdata('login_fail', true);
        gotoUrl('/admin/login');
    }
}