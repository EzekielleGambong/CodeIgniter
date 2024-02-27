<?php 
// controllers/Users.php
class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load the URL helper
    }

    public function index() {
        $this->load->view('users/index');
    }

    public function new() {
        $this->load->view('users/new');
    }

    public function create() {
        if ($this->input->post()) {
            $this->load->view('users/coming_soon');
        } else {
            redirect('/users');
        }
    }

    public function count() {
        $count = $this->session->userdata('visit_count') ? $this->session->userdata('visit_count') : 0;
        $count++;
        $this->session->set_userdata('visit_count', $count);
        $this->load->view('users/count', ['count' => $count]);
    }


    public function reset() {
        $this->session->unset_userdata('visit_count');
        $this->load->view('users/reset');
    }

    public function say($message, $number = null) {
        if ($number && is_numeric($number)) {
            $data['message'] = $message;
            $data['number'] = $number;
            $this->load->view('users/say', $data);
        } else {
            $this->load->view('users/say_error');
        }
    }

    public function mprep() {
        $view_data = array(
            'name' => "Michael Choi",
            'age'  => 40,
            'location' => "Seattle, WA",
            'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
        );
        $this->load->view('users/mprep', $view_data);
    }
}

?>