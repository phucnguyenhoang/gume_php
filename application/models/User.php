<?php
class User extends CI_Model
{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($email, $password) {
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('active', true);
        $this->db->where('deleted_at IS NULL', null, false);

        return $this->db->count_all_results();
    }
}