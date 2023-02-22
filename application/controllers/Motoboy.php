<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Motoboy extends  CI_Controller{

        public function index(){
            $this->load->view('view_top');
            $this->load->view('Motoboy/view_login_motoboy');
            $this->load->view('view_bot');

        }
    
    }
?>