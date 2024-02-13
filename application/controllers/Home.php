<?php 

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        echo"I am Main Class!";
    }

    public function hello(){
        echo"Hello World!";
    }
    public function say($param)
    {
        echo strtoupper($param);
    }
    public function say_anything($anything)
    {
        echo strtoupper($anything);
    }
    public function danger()
    {
        redirect('/home');
    }
}
?>