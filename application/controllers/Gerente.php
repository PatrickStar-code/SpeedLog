<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');


    class Gerente extends  CI_Controller{

        public function index(){
            $this->load->view('view_top');
            $this->load->view('Gerente/view_login_adm');
            $this->load->view('view_bot');

        }
    }

?>