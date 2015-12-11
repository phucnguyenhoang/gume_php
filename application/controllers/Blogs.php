<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('blogs');
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('blogs/index');
        $this->load->view('layout/footer');
    }

    public function show($alias)
    {
        $this->load->view('layout/header');
        $this->load->view('blogs/show');
        $this->load->view('layout/footer');
    }
}
