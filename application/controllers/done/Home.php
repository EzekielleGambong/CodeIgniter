<?php 

// class Home extends CI_Controller {
//     public function __construct() {
//         parent::__construct();
//         $this->load->helper('url');
//     }
//     public function index(){
//         echo"I am Main Class!";
//     }

//     public function hellos(){
//         echo"Hello World!";
//     }
//     public function say($param)
//     {
//         echo strtoupper($param);
//     } 
//     public function say_anything($anything)
//     {
//         echo strtoupper($anything);
//     }
//     public function danger()
//     {
//         redirect('/home');
//     }
// }

class Home extends CI_Controller {
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