<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackController extends CI_Controller {

    public function index() {
        $this->load->view('feedback_form');
    }

    public function submit() {
        // Get form data
        $data = array(
            'name' => $this->input->post('name'),
            'course' => $this->input->post('course'),
            'score' => $this->input->post('score'),
            'reason' => $this->input->post('reason'),
        );

        // Load the submitted_entry view with data
        $this->load->view('submitted_entry', $data);
    }
}
