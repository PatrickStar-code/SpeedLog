<?php
class Model_user extends CI_Model
{
    public function gerar_valor_peso($peso_prod)
    {
        $query = $this->db->query("SELECT preco FROM preco_peso WHERE peso_min <= $peso_prod AND peso_max >= $peso_prod");
        return $query->row_array();
    }

    public function gerar_valor_distancia($distancia)
    {
        $query = $this->db->query("SELECT valor_km FROM preco_km WHERE km_rodado <= $distancia ORDER BY km_rodado DESC limit 1  ");
        return $query->row_array();
    }
    public function gerar_valor_tempo($tempo)
    {
        $query = $this->db->query("SELECT valor_tempo FROM preco_tempo WHERE tempo_rodado <= $tempo ORDER BY tempo_rodado DESC limit 1");
        return $query->row_array();
    }


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
        return $query->num_rows();
    }

    public function verificar_acesso($login, $senha)
    {
        $this->db->where("login_usuario", $login);
        $this->db->where("senha_usuario", $senha);
        $this->db->or_where("email_usuario", $login);
        $this->db->where("senha_usuario", $senha);
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

    public function cadastrar_encomenda($desc, $peso, $complemento, $origem, $origem_n, $bairro_origem, $log_origem, $destino, $destino_n, $bairro_destino, $log_destino, $distancia, $tempo_estimado, $valor_total, $cod, $tempo_mins)
    {
        $dados = array(
            "desc_entrega" => $desc,
            "peso_entrega" => $peso,
            "complemento_entrega" => $complemento,
            "cep_origem_entrega" => $origem,
            "numero_origem_entrega" => $origem_n,
            "bairro_origem" => $bairro_origem,
            "logradouro_origem" => $log_origem,
            "cep_destino_entrega" => $destino,
            "numero_destino_entrega" => $destino_n,
            "bairro_destino" => $bairro_destino,
            "logradouro_destino" => $log_destino,
            "distancia_km" => $distancia,
            "tempo_transporte_km" => $tempo_estimado,
            "valor_total" => $valor_total,
            "status_entrega" => "Pendente",
            "Usuario_idUsuario" => $cod,
            "motoboy_idmotoboy" => null,
            "tempo_minutos" => $tempo_mins
        );

        $insert = $this->db->insert('entregas', $dados);
        if ($insert) {
            return "Cadastrei";
        } else {
            return "Não Cadastrei";
        }
    }

    public function dados_tabela($cod_cliente)
    {
        $query = $this->db->query("SELECT  *,date_format(hora_inicio_transporte,'%d/%e/%Y') as data_inicio,date_format(hora_previsto_tranporte,'%d/%e/%Y') as data_previsto FROM entregas LEFT JOIN motoboy ON entregas.motoboy_idmotoboy   = motoboy.idmotoboy");
        $query_result = $query->result();
        return($query_result);
    }

    public function editar($nome_edit,$email_edit,$cep_edit,$file_name_foto,$id,$tel_edit){
            
        $dados = array(
            "nome_usuario" => $nome_edit,
            "email_usuario" => $email_edit,
            "cep_usuario" => $cep_edit,
            "foto_usuario" => $file_name_foto,
            "telefone_usuario" => $tel_edit
        );

        $this->db->where("idUsuario",$id);
        $query = $this->db->update("usuario",$dados);
        if($query){
            return "Dados Editados";
        }
        else{
            return "Erro";
        }



    }
}
