<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'assets/phpmailer/src/Exception.php';
require 'assets/phpmailer/src/PHPMailer.php';
require 'assets/phpmailer/src/SMTP.php';

class Grente extends  CI_Controller
{

    public function index()
    {
        if (isset($_SESSION["login_gerente"])) {
            redirect("grente/home");
        } else {
            $this->load->view('view_top');
            $this->load->view('Gerente/view_login_gerente.php');
            $this->load->view('view_bot');
        }
    }

    // Enviar Email
    public function sendEmailCnh_Aceito()
    {

        $mail = new PHPMailer(true);

        $this->load->model("model_user");
        $email = $this->input->post("email");
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'ssl://smtp.googlemail.com';             //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '0000877720@senaimgaluno.com.br';               //SMTP username
            $mail->Password   = 'Rafa323514148';                             //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom("0000877720@senaimgaluno.com.br", "speedlog");
            $mail->addAddress($email);     //Add a recipient



            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = "CNH Aceito";
            $mail->Body    = '<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td style="background-color: #fff; padding: 20px 0;">
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                  <tr>
                    <td align="center">
                      <img src="https://imgs.search.brave.com/y2XYx55moemR2L3GChnORSOzrbE78m8rjDfdtGHeD4g/rs:fit:626:626:1/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzQwLzg2/LzJlLzQwODYyZTU4/NzU5NWZlMmM5Zjgx/ZjhlYWIwNGNhNjMz/LmpwZw" alt="Logo" width="150" height="auto">
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: #fff; padding: 20px; font-size: 18px; line-height: 24px; color: #333;">
                      <p>Olá,</p>
                      <p>Seu CNH foi aceito.</p>
                      <p>Após analisarmos os dados aceitamos seu CNH em nosso Sistema</p>
                      <p>Caso esteja logado no sistema limpe seu cookies e logue novamente.</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: #f6f6f6; padding: 20px; font-size: 14px; line-height: 18px; color: #333;">
                      <p>Atenciosamente,</p>
                      <p>Equipe de Suporte SpeedLog</p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>';;


            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            // return false
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    // Enviar Email
    public function sendEmailCnh_Negado()
    {

        $mail = new PHPMailer(true);

        $this->load->model("model_user");
        $email =$this->input->post("email");
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'ssl://smtp.googlemail.com';             //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '0000877720@senaimgaluno.com.br';               //SMTP username
            $mail->Password   = 'Rafa323514148';                             //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom("0000877720@senaimgaluno.com.br", "speedlog");
            $mail->addAddress($email);     //Add a recipient



            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = "CNH Negado";
            $mail->Body    = '<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td style="background-color: #fff; padding: 20px 0;">
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                  <tr>
                    <td align="center">
                      <img src="https://imgs.search.brave.com/y2XYx55moemR2L3GChnORSOzrbE78m8rjDfdtGHeD4g/rs:fit:626:626:1/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzQwLzg2/LzJlLzQwODYyZTU4/NzU5NWZlMmM5Zjgx/ZjhlYWIwNGNhNjMz/LmpwZw" alt="Logo" width="150" height="auto">
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: #fff; padding: 20px; font-size: 18px; line-height: 24px; color: #333;">
                      <p>Olá,</p>
                      <p>Recebemos Seu CNH no Sistema.</p>
                      <p>E infelizmente seu CNH foi Negado</p>
                      <p>Caso queira contestar com novas informações entre em contato via este email.</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: #f6f6f6; padding: 20px; font-size: 14px; line-height: 18px; color: #333;">
                      <p>Atenciosamente,</p>
                      <p>Equipe de Suporte SpeedLog</p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>';


            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            // return false
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    public function sendEmailCnh_Aceito_negados()
    {

        $mail = new PHPMailer(true);

        $this->load->model("model_user");
        $email =$this->input->post("email");
        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'ssl://smtp.googlemail.com';             //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '0000877720@senaimgaluno.com.br';               //SMTP username
            $mail->Password   = 'Rafa323514148';                             //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom("0000877720@senaimgaluno.com.br", "speedlog");
            $mail->addAddress($email);     //Add a recipient



            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject = "CNH Foi Aceito pos revisao";
            $mail->Body    ='<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td style="background-color: #fff; padding: 20px 0;">
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                  <tr>
                    <td align="center">
                      <img src="https://imgs.search.brave.com/y2XYx55moemR2L3GChnORSOzrbE78m8rjDfdtGHeD4g/rs:fit:626:626:1/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzQwLzg2/LzJlLzQwODYyZTU4/NzU5NWZlMmM5Zjgx/ZjhlYWIwNGNhNjMz/LmpwZw" alt="Logo" width="150" height="auto">
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: #fff; padding: 20px; font-size: 18px; line-height: 24px; color: #333;">
                      <p>Olá,</p>
                      <p>Seu CNH foi aceito aps a analise.</p>
                      <p>Após analisarmos os novos dados informados aceitamos seu CNH em nosso Sistema</p>
                      <p>Caso esteja logado no sistema limpe seu cookies e logue novamente.</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: #f6f6f6; padding: 20px; font-size: 14px; line-height: 18px; color: #333;">
                      <p>Atenciosamente,</p>
                      <p>Equipe de Suporte SpeedLog</p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>';


            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            // return false
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    

    public function home()
    {
        if (!isset($_SESSION["login_gerente"])) {
            redirect("grente");
        } else {
            $ano_atual = date('Y');
            $this->load->model("model_grente");

            $dados["pedidos"] =array(
                "Em Processo" => $this->model_grente->gerar_status(1,"Motoboy Alocado",$ano_atual),
                "Em Transporte" => $this->model_grente->gerar_status(1,"Em Transporte",$ano_atual),
                "Entregue" =>$this->model_grente->gerar_status(1,"Entregue",$ano_atual),
                "Pendente" => $this->model_grente->gerar_status(1,"Pendente",$ano_atual),
            );

            $dados["registros"] = array(
                "Cliente" => array(
                    "Jan" => $this->model_grente->registros(1,$ano_atual,"usuario","criacao_user"),
                    "Fev" => $this->model_grente->registros(2,$ano_atual,"usuario","criacao_user"),
                    "Mar" => $this->model_grente->registros(3,$ano_atual,"usuario","criacao_user"),
                    "Abr" => $this->model_grente->registros(4,$ano_atual,"usuario","criacao_user"),
                    "Mai" => $this->model_grente->registros(5,$ano_atual,"usuario","criacao_user"),
                    "Jun" => $this->model_grente->registros(6,$ano_atual,"usuario","criacao_user"),
                    "Jul" => $this->model_grente->registros(7,$ano_atual,"usuario","criacao_user"),
                    "Ago" => $this->model_grente->registros(8,$ano_atual,"usuario","criacao_user"),
                    "Set" => $this->model_grente->registros(9,$ano_atual,"usuario","criacao_user"),
                    "Out" => $this->model_grente->registros(10,$ano_atual,"usuario","criacao_user"),
                    "Nov" => $this->model_grente->registros(11,$ano_atual,"usuario","criacao_user"),
                    "Dez" => $this->model_grente->registros(12,$ano_atual,"usuario","criacao_user")
                ),
                "Motoboy" =>array(
                    "Jan" => $this->model_grente->registros(1,$ano_atual,"motoboy","criacao_func"),
                    "Fev" => $this->model_grente->registros(2,$ano_atual,"motoboy","criacao_func"),
                    "Mar" => $this->model_grente->registros(3,$ano_atual,"motoboy","criacao_func"),
                    "Abr" => $this->model_grente->registros(4,$ano_atual,"motoboy","criacao_func"),
                    "Mai" => $this->model_grente->registros(5,$ano_atual,"motoboy","criacao_func"),
                    "Jun" => $this->model_grente->registros(6,$ano_atual,"motoboy","criacao_func"),
                    "Jul" => $this->model_grente->registros(7,$ano_atual,"motoboy","criacao_func"),
                    "Ago" => $this->model_grente->registros(8,$ano_atual,"motoboy","criacao_func"),
                    "Set" => $this->model_grente->registros(9,$ano_atual,"motoboy","criacao_func"),
                    "Out" => $this->model_grente->registros(10,$ano_atual,"motoboy","criacao_func"),
                    "Nov" => $this->model_grente->registros(11,$ano_atual,"motoboy","criacao_func"),
                    "Dez" => $this->model_grente->registros(12,$ano_atual,"motoboy","criacao_func")
                )
            );


            $dados["totais"] = array(
                "Clientes" =>  $this->model_grente->gerar_total("usuario"),
                "Motoboy" =>  $this->model_grente->gerar_total("motoboy"),
                "Encomendas" =>  $this->model_grente->gerar_total("entregas"),
                "Receita" =>   $this->model_grente->total_receita_anual($ano_atual)
            );

            $dados["nmr_pedidos_m"] = array(
               "Jan" => $this->model_grente->gerar_numero_pedidos(1,$ano_atual),
               "Fev" => $this->model_grente->gerar_numero_pedidos(2,$ano_atual),
               "Mar" => $this->model_grente->gerar_numero_pedidos(3,$ano_atual),
               "Abr" => $this->model_grente->gerar_numero_pedidos(4,$ano_atual),
               "Mai" => $this->model_grente->gerar_numero_pedidos(5,$ano_atual),
               "Jun" => $this->model_grente->gerar_numero_pedidos(6,$ano_atual),
               "Jul" => $this->model_grente->gerar_numero_pedidos(7,$ano_atual),
               "Ago" => $this->model_grente->gerar_numero_pedidos(8,$ano_atual),
               "Set" => $this->model_grente->gerar_numero_pedidos(9,$ano_atual),
               "Out" => $this->model_grente->gerar_numero_pedidos(10,$ano_atual),
               "Nov" => $this->model_grente->gerar_numero_pedidos(11,$ano_atual),
               "Dez" => $this->model_grente->gerar_numero_pedidos(12,$ano_atual)

            );
            $dados["nmr_receita_m"] = array(
               "Jan" => $this->model_grente->gerar_numero_receita(1,$ano_atual),
               "Fev" => $this->model_grente->gerar_numero_receita(2,$ano_atual),
               "Mar" => $this->model_grente->gerar_numero_receita(3,$ano_atual),
               "Abr" => $this->model_grente->gerar_numero_receita(4,$ano_atual),
               "Mai" => $this->model_grente->gerar_numero_receita(5,$ano_atual),
               "Jun" => $this->model_grente->gerar_numero_receita(6,$ano_atual),
               "Jul" => $this->model_grente->gerar_numero_receita(7,$ano_atual),
               "Ago" => $this->model_grente->gerar_numero_receita(8,$ano_atual),
               "Set" => $this->model_grente->gerar_numero_receita(9,$ano_atual),
               "Out" => $this->model_grente->gerar_numero_receita(10,$ano_atual),
               "Nov" => $this->model_grente->gerar_numero_receita(11,$ano_atual),
               "Dez" => $this->model_grente->gerar_numero_receita(12,$ano_atual)

            );
            $this->load->view('view_top');
            $this->load->view('Gerente/componentes/sidebar_gerente.php');
            $this->load->view('Gerente/componentes/loading.php');

            $this->load->view("Gerente/view_home_gerente",$dados);
            $this->load->view('view_bot');
        }
    }
    public function clientes()
    {
        if (!isset($_SESSION["login_gerente"])) {
            redirect("grente");
        } else {
            $this->load->model("model_grente");
            $dados["retorno"] = $this->model_grente->gerar_tabela_cliente();
            $this->load->view('view_top');
            $this->load->view('Gerente/componentes/sidebar_gerente.php');
            $this->load->view('Gerente/componentes/loading.php');
            $this->load->view("Gerente/view_cliente_gerente", $dados);
            $this->load->view('view_bot');
        }
    }
    public function funcionario()
    {
        if (!isset($_SESSION["login_gerente"])) {
            redirect("grente");
        } else {
            $this->load->model("model_grente");
            $dados["retorno"] = $this->model_grente->gerar_tabela_motoboy();
            $this->load->view('view_top');
            $this->load->view('Gerente/componentes/sidebar_gerente.php');
            $this->load->view('Gerente/componentes/loading.php');
            $this->load->view("Gerente/view_funcionario_gerente", $dados);
            $this->load->view('view_bot');
        }
    }
    public function entregas()
    {
        if (!isset($_SESSION["login_gerente"])) {
            redirect("grente");
        } else {
            $this->load->model("model_grente");
            $dados["retorno"] = $this->model_grente->gerar_tabela();
            $this->load->view('view_top');
            $this->load->view('Gerente/componentes/sidebar_gerente.php');
            $this->load->view('Gerente/componentes/loading.php');
            $this->load->view("Gerente/view_entregas_gerente", $dados);
            $this->load->view('view_bot');
        }
    }

        public function editar()
    {
        $config_foto_user = array(
            'upload_path' => 'assets/IMGS/bd',
            'allowed_types' => 'jpg|png|jpeg',
            'encrypt_name' => TRUE
        );
         $id =$_POST["id_motoboy"];
         $nome_edit = $_POST["nome_motoboy"];
         $cpf = $_POST["cpf"];
         $email = $_POST["email"];
         $telefone = $_POST["telefone"];
         $placa_moto =  $_POST["placa_moto"];
         $cnh =   $_POST["cnh"];
         $conta =  $_POST["conta"];
         $agencia =   $_POST["agencia"];

        $foto_motoboy =  $_FILES["foto_motoboy"];

        if ($foto_motoboy["name"] == "") {
            $file_name_motoboy = $_POST["ft_motoboy"];
        } else {
            $this->upload->initialize($config_foto_user);
            $this->upload->do_upload("foto_motoboy");
            $upload_data = $this->upload->data();
            $file_name_motoboy = $upload_data['file_name'];
        }
        $foto_cnh =  $_FILES["foto_cnh"];
        $foto_cnh["name"];

        if ($foto_cnh["name"] == "") {
            $file_name_cnh = $_POST["ft_cnh"];
        } else {
            $this->upload->initialize($config_foto_user);
            $this->upload->do_upload("foto_cnh");
            $upload_data = $this->upload->data();
            $file_name_cnh = $upload_data['file_name'];
        }

        $this->load->model("model_grente");
       echo  $retorno = $this->model_grente->editar($id,$nome_edit,$cpf,$email,$telefone,$placa_moto,$cnh,$conta,$agencia,$file_name_motoboy,$file_name_cnh);
      
    }
    

    public function CNH()
    {
        if (!isset($_SESSION["login_gerente"])) {
            redirect("grente");
        } else {
            $this->load->model("model_grente");
            $dados["retorno"] = $this->model_grente->gerar_tabela_cnh();
            $this->load->view('view_top');
            $this->load->view('Gerente/componentes/sidebar_gerente.php');
            $this->load->view('Gerente/componentes/loading.php');

            $this->load->view("Gerente/view_cnh_gerente", $dados);
            $this->load->view('view_bot');
        }
    }

    public function cnh_negados(){
        if (!isset($_SESSION["login_gerente"])) {
            redirect("grente");
        } else {
            $this->load->model("model_grente");
            $dados["retorno"] = $this->model_grente->gerar_tabela_cnh_negado();
            $this->load->view('view_top');
            $this->load->view('Gerente/componentes/sidebar_gerente.php');
            $this->load->view('Gerente/componentes/loading.php');

            $this->load->view("Gerente/view_cnhnegado_gerente", $dados);
            $this->load->view('view_bot');
        } 
    }

    public function pegar_info_motoboy()
    {
        $id = $_POST["id"];

        $this->load->model("model_grente");
        $data = $this->model_grente->get_dados_motoboy($id);
        echo json_encode($data);
    }
    public function pegar_info_entrega()
    {
        $id = $_POST["id"];

        $this->load->model("model_grente");
        $data = $this->model_grente->get_dados_entrega($id);
        echo json_encode($data);
    }

    public function confirmar_cnh(){
        $id = $_POST["id"];

        $this->load->model("model_grente");
        $data = $this->model_grente->confirmar_cnh($id);
    }
    public function realocar_pedido(){
        $id = $_POST["id"];

        $this->load->model("model_grente");
        $data = $this->model_grente->realocar_pedido($id);
    }
    
    public function negar_cnh(){
        $id = $_POST["id"];

        $this->load->model("model_grente");
        $data = $this->model_grente->negar_cnh($id);
    }

    public function deslogar()
    {
        unset($_SESSION['login_gerente']);
        redirect(site_url("grente"));
    }



    public function logar()
    {
        $this->load->model("model_grente");

        $login = $_POST["email_logar"];
        $senha = md5($_POST["senha_logar_gerente"]);

        $retorno = $this->model_grente->verificar_acesso($login, $senha);
        if ($retorno) {
            $_SESSION["login_gerente"] = $retorno;
            echo 1;
        } else {
            echo 0;
        }
    }

  
}