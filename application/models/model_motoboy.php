<?php
class Model_motoboy extends CI_Model
{

    public function pegar_info($id){
        $this->db->where("idEntregas",$id);
        $query = $this->db->get("entregas");
        return $query->result();
    }

  

    public function cadastrar($nome, $email, $foto_motoboy, $cpf, $telefone, $placa, $login, $senha, $cnh, $foto_cnh_motoboy, $conta_corrente, $agencia)
    {
        $dados = array(
            "nome_motoboy" => $nome,
            "email_motoboy" => $email,
            "foto_motoboy" => $foto_motoboy,
            "cpf_motoboy" => $cpf,
            "telefone_motoboy" => $telefone,
            "placa_moto" => $placa,
            "login_motoboy" => $login,
            "senha_motoboy" => $senha,
            "cnh_motoboy" => $cnh,
            "cnh_foto_motoboy" => $foto_cnh_motoboy,
            "conta_corrente" => $conta_corrente,
            "agencia" => $agencia,
            "status_cnh_motoboy" => "Em Analise"
        );

        $this->db->insert("motoboy", $dados);
    } 

    public function gerar_tabela($id){
        $query = $this->db->query("SELECT * FROM entregas WHERE motoboy_idmotoboy  IS NULL");
        return $query -> result();
    }

    public function gerar_tabela_aceitos($id){
        $query = $this->db->query("SELECT * FROM entregas WHERE status_entrega = 'Em transporte' and motoboy_idmotoboy=$id OR status_entrega='Motoboy Alocado' and motoboy_idmotoboy=$id");
        return $query -> result();
    }
  
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

    public function verificar_acesso($login, $senha)
    {
        $this->db->where("login_motoboy", $login);
        $this->db->where("senha_motoboy",$senha);
        $this->db->or_where("email_motoboy", $login);
        $this->db->where("senha_motoboy",$senha);
        $usuario = $this->db->get("motoboy")->row_array();
        return $usuario;
    }

    public function get_dados($id){
        $query   = $this->db->query("SELECT COUNT(*) as contagem,SUM(valor_total)*0.70 as preco FROM entregas WHERE motoboy_idmotoboy = $id and status_entrega = 'Motoboy Alocado'");
        return $query->result();
    }

    public function get_total($id){
        $query = $this->db->query("SELECT sum(valor_70p) as total_entregas FROM entregas WHERE motoboy_idmotoboy = $id and status_entrega = 'Entregue' ");
        return $query->result();
    }

    public function get_entregas($id){
        $query = $this->db->query("SELECT *  FROM entregas WHERE motoboy_idmotoboy = $id and status_entrega = 'Em Transporte'  LIMIT 4");
        return $query->result();
    }

    public  function get_pedidos_realizados($id){
        $query = $this->db->query("SELECT COUNT(*) as FEITOS FROM entregas WHERE motoboy_idmotoboy = $id and status_entrega = 'Entregue'");
        return $query->result();
    }
    public function aceitar_pedido($id_pedido,$id_motoboy){
        $data = array(
            "motoboy_idmotoboy" => $id_motoboy,
            "status_entrega"  => "Motoboy Alocado"
        );
        $this->db->where("idEntregas",$id_pedido);
        $this->db->update("Entregas",$data);
    }
    public function recusar_pedido($id_pedido,$id_motoboy){
        $data = array(
            "motoboy_idmotoboy" => null,
            "status_entrega"  => "Pendente"
        );
        $this->db->where("idEntregas",$id_pedido);
        $this->db->update("Entregas",$data);
    }
    public function iniciar_transporte($id_pedido,$id_motoboy){
        $this->db->select("tempo_minutos");
        $this->db->where("idEntregas",$id_pedido);
        $query = $this->db->get("Entregas");
        $result = $query->result();       
        if($result){
            $minutos = $result[0]->tempo_minutos;
            $this->db->query("UPDATE entregas
                    SET hora_inicio_transporte = now(),status_entrega='Em Transporte',hora_previsto_tranporte=date_add(now(),interval $minutos minute)
                    WHERE idEntregas = $id_pedido;");
        }
    
    }

    public function entregue($id_pedido,$assinatura){
        $data = array(
            "assinado_por" => $assinatura,
            "status_entrega"  => "Entregue"

        );
        $this->db->where("idEntregas",$id_pedido);
        $this->db->update("Entregas",$data);
    }

    public function gerar_tabela_finalizados($id){
        $query = $this->db->query("SELECT * FROM entregas WHERE status_entrega  = 'Entregue'");
        return $query -> result();
    }
}