<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jokes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load the URL helper
        $this->load->model('jokes_model');
    }

    public function index() {
        $data['jokes'] = $this->jokes_model->get_jokes();
        $this->load->view('jokes/index', $data);
    }
    public function new_joke() {
        $this->load->view('jokes/new_joke');
    }

    public function add_joke() {
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->jokes_model->add_joke($data);

        redirect('jokes/' . $this->db->insert_id());
    }

    public function joke($id) {
        $data['joke'] = $this->jokes_model->get_joke($id);
        $this->load->view('jokes/joke', $data);
    }

    public function delete_joke($id) {
        $this->jokes_model->delete_joke($id);
        redirect('jokes');
    }
}
