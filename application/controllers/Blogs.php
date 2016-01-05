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

    public function store() {
        if ($this->input->method() != 'post') show_404();

        $data = $this->input->post();
        $imageName = uniqid('gume_');
        $tmpImgName = $_FILES['thumb']['name'];
        $data['thumb'] = $imageName.substr($tmpImgName, stripos($tmpImgName, '.'));
        $newBlogId = $this->blog->createBlog($data);

        /* upload image */
        $imagePath = 'resources/img/blogs/'.$newBlogId;
        if (!is_dir ($imagePath)) {
            mkdir($imagePath, 0777);
        }
        $config['upload_path']          = $imagePath;
        $config['file_name']            = $imageName;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10240;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('thumb')) {
            $image = $this->upload->data();
            /* make image thumb */
            $config['image_library'] = 'gd2';
            $config['source_image'] = $imagePath.'/'.$image['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 400;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();
        }

        $this->session->set_flashdata('create_blog_success', true);
        gotoUrl('/admin/blog');
    }
}
