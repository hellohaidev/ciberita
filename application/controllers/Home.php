<?php 

class Home extends CI_Controller {

    public function index()
    {
        $data['front'] = "frontend/home";
        $this->load->view("main_home",$data); 
    }

}


?>