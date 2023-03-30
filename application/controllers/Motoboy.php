<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');


class Motoboy extends  CI_Controller
{

    public function perfil()
    {
        if (!isset($_SESSION["login_motoboy"])) {
            redirect(site_url("motoboy"));
        } else {
            $this->load->model("model_motoboy");
            $id = $_SESSION["login_motoboy"]["idmotoboy"];
            $dados["retorno"] = $this->model_motoboy->get_pedidos_realizados($id);

            $this->load->view('view_top');
            $this->load->view('motoboy/componentes/sidebar_mb');
            $this->load->view('motoboy/componentes/loader_mb');
            $this->load->view('Motoboy/view_perfil_motoboy',$dados);
            $this->load->view('view_bot');
        }
    }
    public function finalizadas()
    {
        if (!isset($_SESSION["login_motoboy"])) {
            redirect(site_url("motoboy"));
        } else {
            $this->load->model("model_motoboy");
            $id = $_SESSION["login_motoboy"]["idmotoboy"];
            $dados["retorno"] = $this->model_motoboy->gerar_tabela_finalizados($id);
            $this->load->view('view_top');
            $this->load->view('motoboy/componentes/sidebar_mb');
            $this->load->view('motoboy/componentes/loader_mb');
            $this->load->view('Motoboy/view_finalizados_motoboy',$dados);
            $this->load->view('view_bot');
        }
    }

    public function deslogar()
    {
        unset($_SESSION['login_motoboy']);
        redirect(site_url("motoboy"));
    }

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
        if (!isset($_SESSION["login_motoboy"])) {
            redirect("motoboy");
        } else {
            $this->load->model("model_motoboy");
            $id = $_SESSION["login_motoboy"]["idmotoboy"];
            $dados["retorno"] = $this->model_motoboy->get_dados($id);
            $dados["retorno2"] = $this->model_motoboy->get_total($id);
            $dados["entregas"] = $this->model_motoboy->get_entregas($id);
            $this->load->view('view_top');
            $this->load->view('motoboy/componentes/sidebar_mb');
            $this->load->view('motoboy/componentes/loader_mb');
            $this->load->view('Motoboy/view_home_motoboy', $dados);
            $this->load->view('view_bot');
        }
    }
    public function aceitar_pedido()
    {
        $id_pedido = $_POST["id"];
        $id_motoboy = $_SESSION["login_motoboy"]["idmotoboy"];

        $this->load->model("model_motoboy");
        $this->model_motoboy->aceitar_pedido($id_pedido, $id_motoboy);
    }
    public function iniciar_transporte()
    {
        $id_pedido = $_POST["id"];
        $id_motoboy = $_SESSION["login_motoboy"]["idmotoboy"];

        $this->load->model("model_motoboy");
        echo $retorno =  $this->model_motoboy->iniciar_transporte($id_pedido, $id_motoboy);
    }

    public function entregue()
    {
        $id_pedido = $_POST["id"];
        $assinatura = $_POST["assinatura"];

        $this->load->model("model_motoboy");
        $this->model_motoboy->entregue($id_pedido, $assinatura);
    }

    public function recusar_pedido()
    {
        $id_pedido = $_POST["id"];
        $id_motoboy = $_SESSION["login_motoboy"]["idmotoboy"];

        $this->load->model("model_motoboy");
        $this->model_motoboy->recusar_pedido($id_pedido, $id_motoboy);
    }

    public function entregas()
    {
        if (!isset($_SESSION["login_motoboy"])) {
            redirect("motoboy");
        } else {
            $this->load->model("model_motoboy");
            $id = $_SESSION["login_motoboy"]["idmotoboy"];
            $dados["retorno"] = $this->model_motoboy->gerar_tabela($id);
            $this->load->view('view_top');
            $this->load->view('motoboy/componentes/sidebar_mb');
            $this->load->view('motoboy/componentes/loader_mb');
            $this->load->view('Motoboy/view_entregas_motoboy', $dados);
            $this->load->view('view_bot');
        }
    }
    public function prencher_tabela_aceitos()
    {
        $this->load->model("model_motoboy");
    }

    public function aceitos()
    {
        if (!isset($_SESSION["login_motoboy"])) {
            redirect("motoboy");
        } else {
            $this->load->model("model_motoboy");
            $id = $_SESSION["login_motoboy"]["idmotoboy"];
            $dados["retorno"] = $this->model_motoboy->gerar_tabela_aceitos($id);
            $this->load->view('view_top');
            $this->load->view('motoboy/componentes/sidebar_mb');
            $this->load->view('motoboy/componentes/loader_mb');
            $this->load->view('Motoboy/view_aceitos', $dados);
            $this->load->view('view_bot');
        }
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



        $this->model_motoboy->cadastrar($nome, $email, $file_name_motoboy, $cpf, $telefone, $placa, $login, $senha, $cnh, $file_name_cnh, $conta_corrente, $agencia);
    }

    public function pegar_info()
    {
        $this->load->model("model_motoboy");
        $id = $_POST['id'];
        $data =  $this->model_motoboy->pegar_info($id);
        echo json_encode($data);
    }
}
