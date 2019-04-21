<?php 


class Dashboard extends CI_Controller {


    public function __construct() {

        parent::__construct();

        if (!$this->session->userdata('logged_in')) {

        $this->session->set_flashdata('no_access','maaf silahkan login terlebih dahulu');

        redirect('Login');
        }



    }

    public function index() {
        $data['view_admin'] = "backend/dashboard";
        $this->load->view('main_admin',$data);
    }
}

?>