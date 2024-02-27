<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MoneyController extends CI_Controller {

    public function index() {
        $data['current_money'] = $this->session->userdata('money') ? $this->session->userdata('money') : 500;

        $this->load->view('money_view', $data);
    }

    public function process() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $this->input->post('action');

            switch ($action) {
                case 'Low Risk':
                    $earnings = rand(-25, 100);
                    $this->session->set_userdata('money', $this->session->userdata('money') + $earnings);
                    $this->session->set_userdata('activity', "You found gold and earned $earnings!");
                    break;

                case 'Moderate Risk':
                    $earnings = rand(-100, 1000);
                    if ($earnings < 0) {
                        $this->session->set_userdata('money', $this->session->userdata('money') + $earnings);
                        $this->session->set_userdata('activity', "You gambled and lost $earnings!");
                    } else {
                        $this->session->set_userdata('money', $this->session->userdata('money') + $earnings);
                        $this->session->set_userdata('activity', "You gambled and won $earnings!");
                    }
                    break;

                case 'High Risk':
                    $amount = rand(-500, 2500);
                    if ($amount < 0) {
                        $this->session->set_userdata('money', $this->session->userdata('money') + $amount);
                        $this->session->set_userdata('activity', "You gambled and lost $amount!");
                    } else {
                        $this->session->set_userdata('money', $this->session->userdata('money') + $amount);
                        $this->session->set_userdata('activity', "You gambled and won $amount!");
                    }
                    break;

                case 'Severe Risk':
                    $amount = rand(-3000, 5000);
                    if ($amount < 0) {
                        $this->session->set_userdata('money', $this->session->userdata('money') + $amount);
                        $this->session->set_userdata('activity', "You gambled and lost $amount!");
                    } else {
                        $this->session->set_userdata('money', $this->session->userdata('money') + $amount);
                        $this->session->set_userdata('activity', "You gambled and won $amount!");
                    }
                    break;
            }

            redirect('moneycontroller');
        }
    }
}
