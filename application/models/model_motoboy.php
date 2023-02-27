<?php
class Model_motoboy extends CI_Model
{

    public function verificar_email($email)
    {
        $this->db->where("email_motoboy", $email);
        $query = $this->db->get("motoboy");
        return $query->num_rows();
    }
    public function verificar_cpf($cpf)
    {
        $this->db->where("cpf_motoboy", $cpf);
        $query = $this->db->get("motoboy");
        return $query->num_rows();
    }
    public function verificar_login($login)
    {
        $this->db->where("login_motoboy", $login);
        $query = $this->db->get("motoboy");
        return $query->num_rows();
    }
    public function verificar_tel($telefone)
    {
        $this->db->where("telefone_motoboy", $telefone);
        $query = $this->db->get("motoboy");
        return $query->num_rows();
    }

    public function verificar_acesso($login, $senha)
    {
        $this->db->where("login_motoboy", $login);
        $this->db->where("senha_motoboy", $senha);
        $this->db->or_where("email_motoboy", $login);
        $this->db->where("senha_motoboy", $senha);
        $usuario = $this->db->get("motoboy")->row_array();
        return $usuario;
    }

    public function verificar_cnh($cnh)
    {
        $this->db->where("cnh_motoboy", $cnh);
        $query = $this->db->get("motoboy");
        return $query->num_rows();
    }

    public function verificar_conta($conta)
    {
        $this->db->where("conta_corrente", $conta);
        $query = $this->db->get("motoboy");
        return $query->num_rows();
    }

    public function verificar_placa($placa)
    {
        $this->db->where("placa_moto", $placa);
        $query = $this->db->get("motoboy");
        return $query->num_rows();
    }

    public function cadastrar($nome, $telefone, $email, $cep, $cpf, $login, $senha, $img)
    {
        $dados = array(
            "nome_motoboy" => $nome,
            "telefone_motoboy" => $telefone,
            "email_motoboy" => $email,
            "cpf_motoboy" => $cpf,
            "login_motoboy" => $login,
            "senha_motoboy" => $senha,
            "foto_motoboy" => $img

        );

        $this->db->insert("motoboy", $dados);
        return "Cadastro Realizado Com Sucesso";
    }
}
