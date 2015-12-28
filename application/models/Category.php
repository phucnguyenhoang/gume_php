<?php
class Category extends CI_Model {

    private $color = array(
        'cong-nghe' => 'blue',
        'doi-song' => 'red',
        'giai-tri' => 'green'
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function color() {
        return $this->color;
    }

    public function getAll($isPublish = null) {
        $this->db->from('categories');
        if ($isPublish !== null) {
            $this->db->where('is_publish', $isPublish);
        }
        $this->db->where('deleted_at IS NULL', null, false);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }

    public function getByAlias($alias, $isPublish = null) {
        $this->db->from('categories');
        $this->db->where('alias', $alias);
        if ($isPublish !== null) {
            $this->db->where('is_publish', $isPublish);
        }
        $this->db->where('deleted_at IS NULL', null, false);
        $query = $this->db->get();

        return $query->row();
    }
}