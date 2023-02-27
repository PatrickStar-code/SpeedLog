<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');


class Motoboy extends  CI_Controller
{

    public function index()
    {
        $this->load->view('view_top');
        $this->load->view('Motoboy/view_login_motoboy');
        $this->load->view('view_bot');
    }


    public function verificar()
    {
        $item = $_POST["item"];
        $validar = $_POST["verificar"];
        $this->load->model("model_motoboy");

        if ($item == "cpf") {
            echo $this->model_motoboy->verificar_cpf($validar);
        } elseif ($item == "tel") {
            echo $this->model_motoboy->verificar_tel($validar);
        } elseif ($item == "email") {
            echo $this->model_motoboy->verificar_email($validar);
        } elseif ($item == "cnh") {
            echo $this->model_motoboy->verificar_cnh($validar);
        } elseif ($item == "conta") {
            echo $this->model_motoboy->verificar_conta($validar);
        } elseif ($item == "placa") {
            echo $this->model_motoboy->verificar_placa($validar);
        } else {
            echo $this->model_motoboy->verificar_login($validar);
        }
    }

    public function registrar()
    {
        $this->load->model("model_motoboy");
        
        $nome = $_POST["nome"];
        $foto_motoboy_name =  $_FILES["foto"];
        $foto_cnh = $_FILES["foto_cnh"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["tel"];
        $placa = $_POST["placa"];
        $login = $_POST["login"];
        $senha = md5($_POST["senha"]);
        $cnh = $_POST["cnh"];
        $conta_corrente = $_POST["conta"];
        $agencia = $_POST["agencia"];

        $config_foto_motoboy = array(
            'upload_path' => 'assets/IMGS/bd',
            'allowed_types' => 'jpg|png|jpeg',
            'file_name' => $nome,'.jpg'
        );

        $config_cnh_motoboy = array(
            'upload_path' => 'assets/IMGS/bd',
            'allowed_types' => 'jpg|png|jpeg',
            'file_name' => $nome,'_cnh.jpg'
        );
        $this->upload->initialize($config_foto_motoboy);        
        $this->upload->do_upload("foto");
        $this->upload->initialize($config_cnh_motoboy);        
        $this->upload->do_upload("foto_cnh");

        $this->model_user->cadastrar();
    }
}
