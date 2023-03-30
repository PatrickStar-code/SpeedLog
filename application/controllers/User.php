<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'assets/phpmailer/src/Exception.php';
require 'assets/phpmailer/src/PHPMailer.php';
require 'assets/phpmailer/src/SMTP.php';


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
            $this->load->model("model_user");
            $id = $_SESSION["login_cliente"]["idUsuario"];
            $dados["retorno"] = $this->model_user->get_total($id);
            $this->load->view('view_top');
            $this->load->view("usuario/components/navbar_usuario");
            $this->load->view("usuario/components/loader2");
            $this->load->view('Usuario/view_perfil', $dados);
            $this->load->view('view_bot');
        }
    }

    public function reset_password()
    {
        if ($_GET["hash"]) {
            $this->load->model("model_user");
            $hash = $_GET["hash"];
            $gethashDetails = $this->model_user->getHashDetais($hash);
            if ($gethashDetails != false) {
                $hashexpiry = $gethashDetails->hash_expiry;
                $currentdate = date("Y-m-d H:i");
                if($currentdate < $hashexpiry){
                    $data["email"] = $gethashDetails->email_usuario;
                    $this->load->view('view_top');
                    $this->load->view("usuario/view_recuperar_senha",$data);
                    $this->load->view('view_bot');
                }
                else{
                    redirect("user");  
                }
               
            } else {
                echo 'Hash expirado';
                exit;
            }
        } else {
            redirect("user");
        }
    }

    public function existe_email_senha()
    {
        $email = $_POST["login_email"];

        $this->load->model("model_user");
        $validar = $this->model_user->verificar_email_senha($email);
        if ($validar != false) {
            $row = $validar;
            $user_id = $row->idUsuario;
            $string = time() . $user_id . $email;
            $hash_string = hash('sha256', $string);
            $currentdate = date('Y-m-d H:i');
            $hash_expiry = date('Y-m-d H:i', strtotime($currentdate . '1 days'));
            $data = array(
                'hash_key' => $hash_string,
                'hash_expiry' => $hash_expiry
            );

            $resetlink = site_url() . '/user/reset_password?hash=' . $hash_string;
            $message = '   <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td style="background-color: #fff; padding: 20px 0;">
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                  <tr>
                    <td align="center">
                      <img src="https://imgs.search.brave.com/u2JsI7F4q-6uHdNozZPW5mDeom-K_AS31rg2SKNsp-U/rs:fit:512:512:1/g:ce/aHR0cHM6Ly9yZXF1/ZXN0LmJyLmlyb25t/b3VudGFpbi5jb20v/cmVmaXdlYk12Yy9J/bWFnZXMvcGFzc3dv/cmQucG5n" alt="Logo" width="150" height="auto">
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: #fff; padding: 20px; font-size: 18px; line-height: 24px; color: #333;">
                      <p>Olá,</p>
                      <p>Recebemos uma solicitação para recuperar sua senha.</p>
                      <p>Para recuperar sua senha, por favor, clique no link abaixo:</p>
                      <p><a href="'.$resetlink.'" style="color: #007bff; text-decoration: none;">Recuperar Senha</a></p>
                      <p>O link será válido por apenas 24 horas. Se você não solicitou a recuperação de senha, por favor, ignore este e-mail.</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="background-color: #f6f6f6; padding: 20px; font-size: 14px; line-height: 18px; color: #333;">
                      <p>Atenciosamente,</p>
                      <p>Equipe de Suporte Speedlog</p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>' ;
            $subject = "Password Reset";

            $sent_status = $this->sendEmail($email, $subject, $message);
            if ($sent_status == true) {
                $this->model_user->udateHash($data, $email);
                $this->session->set_flashdata('sucess', "Enviamos um Email de recuperação");

                echo "Enviou";
            } else {
                $this->session->set_flashdata('error', "Erro Ao Enviar Email");
            }
        } else {
            $this->session->set_flashdata('error', "Email Invalido");
            ;
        }
    }

    //Recuperar Senha
    public function nova_senha(){
         $senha = md5($_POST["senha_recuperar"]);
         $data= array(
            "hash_key" => null,
            "hash_expiry" => null,
            "senha_usuario" => $senha
         );
         $email = $_POST["email"];
         $this->load->model("model_user");
         $query = $this->model_user->nova_senha($data,$email);
         if($query == true){
            echo "deu bom";
            // $_SESSION["recuperado"]
         }
         
    }

    // Enviar Email
    public function sendEmail($email, $subject, $message)
    {

        $mail = new PHPMailer(true);

        $this->load->model("model_user");

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
            $mail->Subject = $subject;
            $mail->Body    = $message;


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
        echo $nome = $_POST["nome"];
        echo $telefone = $_POST["telefone"];
        echo $email = $_POST["email"];
        echo $cep = $_POST["cep"];
        echo $cpf = $_POST["cpf"];
        echo $login = $_POST["login"];
        echo $senha = md5($_POST["senha"]);

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
        } else {
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
            $this->load->view("usuario/components/loader");
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