<?php
class Model_user extends CI_Model
{

    public function verificar_email($email)
    {
        $this->db->where("email_usuario", $email);
        $query = $this->db->get("usuario");
        return $query->num_rows();
    }
    public function verificar_cpf($cpf)
    {
        $this->db->where("cpf_usuario", $cpf);
        $query = $this->db->get("usuario");
        return $query->num_rows();
    }
    public function verificar_login($login)
    {
        $this->db->where("login_usuario", $login);
        $query = $this->db->get("usuario");
        return $query->num_rows();
    }
    public function verificar_tel($telefone)
    {
        $this->db->where("telefone_usuario", $telefone);
        $query = $this->db->get("usuario");
        return $query->result();
    }

    public function verificar_acesso($login, $senha)
    {
        $this->db->where("login_usuario", $login);
        $this->db->where("senha_usuario",$senha);
        $this->db->or_where("email_usuario", $login);
        $this->db->where("senha_usuario",$senha);
        $usuario = $this->db->get("usuario")->row_array();
        return $usuario;
    
    }

    public function cadastrar($nome, $telefone, $email, $cep, $cpf, $login, $senha)
    {
        $dados = array(
            "nome_usuario" => $nome,
            "telefone_usuario" => $telefone,
            "email_usuario" => $email,
            "cep_usuario" => $cep,
            "cpf_usuario" => $cpf,
            "login_usuario" => $login,
            "senha_usuario" => $senha,
            "foto_usuario" => "ft_padrao_user.png"

        );

        $this->db->insert("usuario", $dados);
        return "Cadastro Realizado Com Sucesso";
    }
}
