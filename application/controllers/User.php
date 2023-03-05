<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');


class User extends CI_Controller
{

    public function index()
    {
        $this->load->view('view_top');
        $this->load->view("usuario/components/navbar_usuario");
        $this->load->view('Usuario/view_home_user');
        $this->load->view('view_bot');
    }

    public function perfil()
    {
        if (!isset($_SESSION["login_cliente"])) {
            redirect("user");
        } else {
            $this->load->view('view_top');
            $this->load->view("usuario/components/navbar_usuario");
            $this->load->view('Usuario/view_perfil');
            $this->load->view("usuario/components/footer_usuario");
            $this->load->view('view_bot');
        }
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
        if ($retorno) {
            $_SESSION["login_cliente"] = $retorno;
            echo 1;
        } else {
            echo 0;
        }
    }

    public function editar()
    {
        $config_foto_user = array(
            'upload_path' => 'assets/IMGS/bd',
            'allowed_types' => 'jpg|png|jpeg',
            'encrypt_name' => TRUE
        );
        $id = $_SESSION['login_cliente']["idUsuario"];
        $nome_edit = $_POST["nome_edit"];
        $email_edit = $_POST["email_edit"];
        $cep_edit = $_POST["cep_edit"];
        $tel_edit = $_POST["tel_edit"];
        $foto =  $_FILES["ft_edit"];
        if ($foto["name"] == "") {
            $file_name_foto = $_SESSION['login_cliente']["foto_usuario"];
        } else {
            $this->upload->initialize($config_foto_user);
            $this->upload->do_upload("ft_edit");
            $upload_data = $this->upload->data();
            $file_name_foto = $upload_data['file_name'];
        }

        $this->load->model("model_user");
        $retorno = $this->model_user->editar($nome_edit, $email_edit, $cep_edit, $file_name_foto, $id, $tel_edit);
        if ($retorno == "Dados Editados") {
            $_SESSION['login_cliente']["nome_usuario"] = $nome_edit;
            $_SESSION['login_cliente']["email_usuario"] = $email_edit;
            $_SESSION['login_cliente']["cep_usuario"] = $cep_edit;
            $_SESSION['login_cliente']["foto_usuario"] = $file_name_foto;
            $_SESSION['login_cliente']["telefone_usuario"] = $tel_edit;
            echo $retorno;
        }
        else{
            echo $retorno;
        }
    }

    public function deslogar()
    {
        unset($_SESSION['login_cliente']);
        redirect(site_url("User"));
    }

    public function calcular_peso()
    {
        $this->load->model("model_user");
        $peso = $this->input->post("peso");
        if ($peso <= 12.00) {
            $retorno = $this->model_user->gerar_valor_peso($peso);
            echo $retorno["preco"];
        } else {
            echo 0;
        }
    }

    public function calcular_distancia()
    {
        $this->load->model("model_user");
        $distancia = $_POST["distancia_val"];
        if ($distancia != "") {
            $retorno = $this->model_user->gerar_valor_distancia($distancia);
            echo $retorno["valor_km"];
        } else {
            echo 0;
        }
    }
    public function calcular_tempo()
    {
        $this->load->model("model_user");
        $tempo = $_POST["tempo"];
        if ($tempo != 0) {
            $retorno = $this->model_user->gerar_valor_tempo($tempo);
            echo $retorno["valor_tempo"];
        } else {
            echo 0;
        }
    }

    public function encomendas()
    {
        if (!isset($_SESSION["login_cliente"])) {
            redirect("user");
        } else {
            $this->load->model("model_user");
            $cod_cliente = $_SESSION["login_cliente"]["idUsuario"];
            $dados["encomendas"] = $this->model_user->dados_tabela($cod_cliente);
            $this->load->view('view_top');
            $this->load->view("usuario/components/navbar_usuario");
            $this->load->view('Usuario/view_encomendas', $dados);
            $this->load->view('view_bot');
        }
    }

    public function nova_encomenda()
    {
        $this->load->model("model_user");

        $desc = $_POST["desc"];
        $peso = $_POST["peso"];
        $complemento = $_POST["complemento"];
        $origem = $_POST["origem"];
        $origem_n = $_POST["origem_N"];
        $bairro_origem = $_POST["bairro_origem"];
        $log_origem = $_POST["log_origem"];
        $destino = $_POST["destino"];
        $destino_n = $_POST["destino_n"];
        $bairro_destino = $_POST["bairro_destino"];
        $log_destino = $_POST["log_destino"];
        $valor_total = $_POST["valor_total"];
        $cod = $_POST["cod"];
        $distancia = $_POST["distancia"];
        $tempo_estimado = $_POST["tempo_estimado"];
        $tempo_mins = $_POST["mins"];


        $retorno = $this->model_user->cadastrar_encomenda($desc, $peso, $complemento, $origem, $origem_n, $bairro_origem, $log_origem, $destino, $destino_n, $bairro_destino, $log_destino, $distancia, $tempo_estimado, $valor_total, $cod, $tempo_mins);
        echo $retorno;
    }
}
