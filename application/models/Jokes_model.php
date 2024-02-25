<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jokes_model extends CI_Model {

    public function get_jokes() {
        return $this->db->get('jokes')->result_array();
    }

    public function get_joke($id) {
        return $this->db->get_where('jokes', array('id' => $id))->row_array();
    }

    public function add_joke($data) {
        $this->db->insert('jokes', $data);
    }

    public function delete_joke($id) {
        $this->db->delete('jokes', array('id' => $id));
    }
}
