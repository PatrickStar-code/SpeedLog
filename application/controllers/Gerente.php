<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Gerente extends  CI_Controller{
    
        public function index(){
            $this->load->view('Gerente/view_login_adm.php');
        }

        public function autenticar(){
            $this->load->model("Model_gerente");
            $email_adm = $this->input->post("email");
            $senha_adm = md5 ($this->input->post("senha"));
            $gerente = $this->model_gerente->logarGerente($email_adm, $senha_adm);
            if ($gerente) {
                $this->session->set_userdata("Gerente Logado", $gerente);
                $this->session->set_flashdata("sucess", "Logado com Sucesso!");
            }else{
                $this->session->set_flashdata("danger", "Gerente ou senha invalidos!");
            }
            
        redirect(uri:'/')
    }
}
?>



