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
        $data = array();

        $categories = $this->category->getAll(true);
        $categoryColor = $this->category->color();
        $data['categories'] = $categories;
        $data['categoryColor'] = $categoryColor;

        $hotBlog = $this->blog->hot();
        $data['hotBlog'] = $hotBlog;

        $this->load->view('layout/header');
        $this->load->view('blogs/index', $data);
        $this->load->view('layout/footer');
    }

    public function show($alias)
    {
        $data = array();

        $categories = $this->category->getAll(true);
        $categoryColor = $this->category->color();
        $data['categories'] = $categories;
        $data['categoryColor'] = $categoryColor;

        $this->load->view('layout/header');
        $this->load->view('blogs/show', $data);
        $this->load->view('layout/footer');
    }
}
