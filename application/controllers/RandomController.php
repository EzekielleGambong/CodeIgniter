<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RandomController extends CI_Controller {

    public function index() {
        $this->load->library('session');

        $count = $this->session->userdata('count') ? $this->session->userdata('count') : 0;

        $randomNumber = mt_rand(1000000, 9999999);
        $data = array(
            'randomNumber' => $randomNumber,
            'count' => $count,
        );

        $this->load->view('random_view', $data);
    }

    public function pick() {
        $this->load->library('session');
        $count = $this->session->userdata('count') ? $this->session->userdata('count') : 0;
        $count++;
        $this->session->set_userdata('count', $count);
        redirect('randomcontroller');
    }
}
