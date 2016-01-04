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
        foreach ($categories as $k => $category) {
            $categories[$k]->num_new = $this->blog->countNewByCategory($category->id);
        }
        $categoryColor = $this->category->color();
        $data['categories'] = $categories;
        $data['categoryColor'] = $categoryColor;

        $hotBlog = $this->blog->hot();
        $data['hotBlog'] = $hotBlog;
        $blogs = $this->blog->all(true);
        $data['blogs'] = $blogs;

        $this->load->view('layout/header');
        $this->load->view('blogs/index', $data);
        $this->load->view('layout/footer');
    }

    public function show($category, $blog)
    {
        $data = array();

        $categories = $this->category->getAll(true);
        foreach ($categories as $k => $cat) {
            $categories[$k]->num_new = $this->blog->countNewByCategory($cat->id);
        }
        $hotBlog = $this->blog->hot();
        if ($hotBlog->alias == $blog) {
            $hotBlog = $this->blog->hot(2);
        }
        $data['hotBlog'] = $hotBlog;
        $categoryColor = $this->category->color();
        $data['categories'] = $categories;
        $data['categoryColor'] = $categoryColor;

        $this->load->view('layout/header');
        $this->load->view('blogs/show', $data);
        $this->load->view('layout/footer');
    }

    public function category($alias)
    {
        $data = array();

        $category = $this->category->getByAlias($alias, true);

        if (empty($category)) show_404();

        $categories = $this->category->getAll(true);
        foreach ($categories as $k => $category) {
            $categories[$k]->num_new = $this->blog->countNewByCategory($category->id);
        }
        $categoryColor = $this->category->color();
        $data['categories'] = $categories;
        $data['categoryColor'] = $categoryColor;

        $hotBlog = $this->blog->hot();
        $data['hotBlog'] = $hotBlog;
        $blogs = $this->blog->getByCategory($alias, true);
        $data['blogs'] = $blogs;

        $this->load->view('layout/header');
        $this->load->view('blogs/category', $data);
        $this->load->view('layout/footer');
    }
}
