<?php
class Blog extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function hot() {
        $this->db->select('id, alias, title, description, thumb');
        $this->db->from('blogs');
        $this->db->where('deleted_at IS NULL', null, false);
        $this->db->order_by('num_view', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row();
    }
}