<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');


class User extends CI_Controller
{

    public function index()
    {
        $this->load->view('view_top');
        $this->load->view('Usuario/view_home_user');
        $this->load->view('view_bot');
    }

    public function verificar()
    {
        $item = $_POST["item"];
        $validar = $_POST["verificar"];
        $this->load->model("model_user");

        if ($item == "cpf") {
            echo $this->model_user->verificar_cpf($validar);
        } elseif ($item == "tel") {
            echo $this->model_user->verificar_tel($validar);
        } elseif ($item == "email") {
            echo $this->model_user->verificar_email($validar);
        } else {
            echo $this->model_user->verificar_login($validar);
        }

    }

    public function cadastro()
    {
        $this->load->view('view_top');
        $this->load->view('Usuario/view_cadastro');
        $this->load->view('view_bot');
    }

    public function registrar()
    {
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $cpf = $_POST["cpf"];
        $login = $_POST["login"];
        $senha = md5($_POST["senha"]);

        $this->load->model("model_user");

        $this->model_user->cadastrar($nome, $telefone, $email, $cep, $cpf, $login, $senha);
    }

    public function logar()
    {
        $this->load->model("model_user");

        $login = $_POST["login"];
        $senha = md5($_POST["senha"]);
        $retorno = $this->model_user->verificar_acesso($login, $senha);
        if($retorno){
            $_SESSION["login_cliente"] = $retorno;
            echo 1;
        }else{
            echo 0;
        }

    }

    public function deslogar(){
        unset($_SESSION['login_cliente']); 
        redirect(site_url("User"));

    }

    public function calcular_peso(){
        $this->load->model("model_user");
        $peso = $this->input->post("peso");
        if($peso <= 12.00){
            $retorno = $this->model_user->gerar_valor_peso($peso);
            echo $retorno["preco"];
        }
        else{
            echo 0;
        }
    }
}