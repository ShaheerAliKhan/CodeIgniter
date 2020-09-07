<?php
class Test extends CI_Controller {
    public function index() {
        echo "Hello World";
    }
    public function hello() {
        // echo "Hello Function";
        $this->load->view('test');
    }
}
?>