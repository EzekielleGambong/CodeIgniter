<?php 

class Main extends CI_Controller {
    public function world() {
        $this->load->view('world');
    }

    public function ninjas($number = null) {
        if ($number) {
            $data['number'] = $number;
            $this->load->view('ninjas', $data);
        } else {
            $this->load->view('ninjas');
        }
    }
}

?>