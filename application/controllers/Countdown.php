<?php 
class Countdown extends CI_Controller {
    public function main() {
        // Calculate current date and remaining seconds
        $currentDate = date('Y-m-d H:i:s');
        $remainingSeconds = strtotime('2025-01-01') - time();

        // Pass data to the view
        $data = array(
            'currentDate' => $currentDate,
            'remainingSeconds' => $remainingSeconds,
        );

        // Load the default view
        $this->load->view('countdown/main', $data);
    }
}
?>