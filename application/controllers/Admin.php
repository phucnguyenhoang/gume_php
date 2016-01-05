<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    private $noAuth = array('login', 'logout', 'auth');

    public function __construct() {
        parent::__construct();
        $this->lang->load(array('common', 'admin'));
        $this->load->model('user');
        if (!in_array($this->uri->segment(2), $this->noAuth) && !$this->_checkLogin()) gotoUrl('/admin/login');
    }

    public function index() {
        $this->load->view('layout/admin_header');
        $this->load->view('admin/index');
        $this->load->view('layout/admin_footer');
    }

    public function blog() {
        $header = array(
            'title' => 'Blog list'
        );

        $control = array(
            'add' => '/admin/blog/create'
        );
        $header['control'] = $control;
        $this->load->view('layout/admin_header', $header);
        $this->load->view('admin/blog');
        $this->load->view('layout/admin_footer');
    }

    public function blog_create() {
        $header = array(
            'title' => 'Blog create'
        );
        $data = array();

        $control = array(
            'arrow-back' => '/admin/blog'
        );
        $header['control'] = $control;

        $categories = $this->category->getAll(true);
        $data['categories'] = $categories;

        $this->load->view('layout/admin_header', $header);
        $this->load->view('admin/blog_create', $data);
        $this->load->view('layout/admin_footer');
    }

    public function category() {
        $this->load->view('layout/admin_header');
        $this->load->view('admin/blog');
        $this->load->view('layout/admin_footer');
    }

    public function tag() {
        $this->load->view('layout/admin_header');
        $this->load->view('admin/blog');
        $this->load->view('layout/admin_footer');
    }

    public function login() {
        if ($this->_checkLogin()) {
            gotoUrl('/admin');
        }
        $this->load->view('admin/login', array('title' => lang('login_title')));
    }

    public function logout() {
        $this->session->unset_userdata(array('admin_logged_in', 'auth'));
        gotoUrl('/admin/login');
    }

    public function auth() {
        if ($this->input->method() != 'post') show_404();

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $auth =  $this->user->login($email, sha1($password));
        if (!empty($auth)) {
            $this->session->set_flashdata('login_success', true);
            $this->session->set_userdata('admin_logged_in', true);
            $this->session->set_userdata('auth', $auth);
            gotoUrl('/admin');
        }

        $this->session->set_flashdata('login_fail', true);
        gotoUrl('/admin/login');
    }

    private function _checkLogin() {
        return ($this->session->has_userdata('admin_logged_in') && $this->session->userdata('admin_logged_in') == true);
    }
}