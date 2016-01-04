<?php
class Blog extends CI_Model {

    private $numViewIsNew = 20;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function hot($num = 1) {
        $this->db->select('blogs.id, blogs.alias, title, description, blogs.thumb, categories.alias as category');
        $this->db->from('blogs');
        $this->db->join('categories', 'blogs.category_id = categories.id');
        $this->db->where('blogs.is_publish', true);
        $this->db->where('categories.is_publish', true);
        $this->db->where('blogs.deleted_at IS NULL', null, false);
        $this->db->where('categories.deleted_at IS NULL', null, false);
        $this->db->order_by('num_view', 'desc');
        if ($num == 1) {
            $this->db->limit(1);
        } else {
            $this->db->limit(1, $num - 1);
        }

        $query = $this->db->get();

        return $query->row();
    }

    public function all($isPublish = null) {
        $this->db->select('blogs.id, blogs.alias, title, description, blogs.thumb, categories.alias as category');
        $this->db->from('blogs');
        $this->db->join('categories', 'blogs.category_id = categories.id');
        if ($isPublish !== null) {
            $this->db->where('blogs.is_publish', $isPublish);
            $this->db->where('categories.is_publish', $isPublish);
        }
        $this->db->where('blogs.deleted_at IS NULL', null, false);
        $this->db->where('categories.deleted_at IS NULL', null, false);
        $this->db->order_by('blogs.created_at', 'desc');
        $this->db->order_by('num_view', 'desc');

        $query = $this->db->get();

        return $query->result();
    }

    public function getByCategory($alias, $isPublish = null) {
        $this->db->select('blogs.id, blogs.alias, title, description, blogs.thumb, categories.alias as category');
        $this->db->from('blogs');
        $this->db->join('categories', 'blogs.category_id = categories.id');
        if ($isPublish !== null) {
            $this->db->where('blogs.is_publish', $isPublish);
            $this->db->where('categories.is_publish', $isPublish);
        }
        $this->db->where('categories.alias', $alias);
        $this->db->where('blogs.deleted_at IS NULL', null, false);
        $this->db->where('categories.deleted_at IS NULL', null, false);
        $this->db->order_by('blogs.created_at', 'desc');
        $this->db->order_by('num_view', 'desc');

        $query = $this->db->get();

        return $query->result();
    }

    public function countNewByCategory($id) {
        $this->db->from('blogs');
        $this->db->where('blogs.category_id', $id);
        $this->db->where('blogs.num_view <=', $this->numViewIsNew);
        $this->db->where('blogs.deleted_at IS NULL', null, false);

        return $this->db->count_all_results();
    }
}