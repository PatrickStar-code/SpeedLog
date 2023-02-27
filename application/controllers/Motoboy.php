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

        if (isset($_SESSION["login_motoboy"])) {
            redirect("motoboy/home");
        }
    }
    public function home()
    {
        $this->load->view('view_top');
        $this->load->view('Motoboy/view_home_motoboy');
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

    public function logar()
    {
        $this->load->model("model_motoboy");

        $login = $_POST["email_logar"];
        $senha = md5($_POST["senha_logar"]);

        $retorno = $this->model_motoboy->verificar_acesso($login, $senha);
        if ($retorno) {
            $_SESSION["login_motoboy"] = $retorno;
            echo 1;
        } else {
            echo 0;
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
            'encrypt_name' => TRUE
        );


        $this->upload->initialize($config_foto_motoboy);
        $this->upload->do_upload("foto");
        $upload_data = $this->upload->data();
        $file_name_motoboy = $upload_data['file_name'];
        $this->upload->do_upload("foto_cnh");
        $upload_data_cnh = $this->upload->data();
        $file_name_cnh = $upload_data_cnh['file_name'];



            $this->model_motoboy->cadastrar($nome, $email, $file_name_motoboy, $cpf, $telefone, $placa, $login, $senha, $cnh,$file_name_cnh, $conta_corrente, $agencia);
    }
}
