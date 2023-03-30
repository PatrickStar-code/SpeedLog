<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');


class Redirecionador extends CI_Controller {


	public function index()
	{
		$this->load->view('view_top');
		$this->load->view('view_home');
		$this->load->view('view_bot');
	}

	public function redirecionar($ida){


		$local = array(
			"Motoboy" => $this->load->view('Motoboy/view_login_motoboy'),
			"Cliente" => $this->load->view('Usuario/view_home_user'),
			"Gerente" => $this->load->view('Gerente/view_login_gerente')
		);


		$this->load->view('view_top');
		$local[$ida];
		$this->load->view('view_bot');


	}
}
