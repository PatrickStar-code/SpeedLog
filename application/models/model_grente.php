<?php

    class Model_grente extends CI_Model{
       
        public function verificar_acesso($login, $senha)
        {
            $this->db->where("login_adm", $login);
            $this->db->where("senha_adm",$senha);
            $usuario = $this->db->get("administrador")->row_array();
            return $usuario;
        }
    
        public function gerar_tabela(){
            $query = $this->db->query("SELECT * FROM entregas LEFT JOIN motoboy ON entregas.motoboy_idmotoboy = motoboy.idmotoboy INNER JOIN usuario ON usuario.idUsuario = entregas.Usuario_idUsuario  ");
        return $query -> result();
        }

        public function gerar_tabela_cliente(){
            $query = $this->db->query("SELECT * FROM usuario");
        return $query -> result();   
        }
        public function gerar_tabela_motoboy(){
            $query = $this->db->query("SELECT * FROM motoboy WHERE status_cnh_motoboy !=  'Negado'");
        return $query -> result();   
        }

        public function gerar_tabela_cnh(){
            $query = $this->db->query("SELECT * FROM motoboy WHERE status_cnh_motoboy = 'Em Analise' ");
            return $query -> result();   
        }
        
        public function gerar_tabela_cnh_negado(){
            $query = $this->db->query("SELECT * FROM motoboy WHERE status_cnh_motoboy = 'Negado' ");
            return $query -> result();
        }
        
        public function editar($id,$nome_edit,$cpf,$email,$telefone,$placa_moto,$cnh,$conta,$agencia,$file_name_motoboy,$file_name_cnh){
            $dados = array(
                "nome_motoboy" => $nome_edit ,
                "email_motoboy" => $email,
                "foto_motoboy" => $file_name_motoboy,
                "cpf_motoboy" => $cpf,
                "telefone_motoboy" => $telefone ,
                "placa_moto" => $placa_moto,	
                "cnh_motoboy" => $cnh,
                "cnh_foto_motoboy" => $file_name_cnh,
                "conta_corrente" => $conta,
                "agencia"  => $agencia 
            );

            $this->db->where("idmotoboy",$id);
            $query = $this->db->update("motoboy",$dados);
            if($query){
                return "Foi";
            }else{
                return "Erro";
            }
        }

        public function get_dados_motoboy($id){
            $query = $this->db->query("SELECT * FROM motoboy WHERE idmotoboy = $id ");
            return $query -> result();   
        }
        public function get_dados_entrega($id){
            $query = $this->db->query("SELECT * FROM entregas WHERE idEntregas  = $id ");
            return $query -> result();   
        }

        public function confirmar_cnh($id){
            $dados = array(
                "status_cnh_motoboy" => "Aceito"
            );
            $this->db->where("idmotoboy",$id);
            $this->db->update("motoboy",$dados);
        }
        public function negar_cnh($id){
            $dados = array(
                "status_cnh_motoboy" => "Negado"
            );
            $this->db->where("idmotoboy",$id);
            $this->db->update("motoboy",$dados);
        }
        public function realocar_pedido($id){
            $dados = array(
                "motoboy_idmotoboy" => NULL,
                "status_entrega" => "Pendente"
            );
            $this->db->where("idEntregas",$id);
            $this->db->update("entregas",$dados);
        }

        public function gerar_numero_pedidos($mes,$ano_atual){
            $query = $this->db->query("SELECT COUNT(*) as 'nmr_pedidos' FROM entregas WHERE MONTH(data_pedido) = $mes AND YEAR(data_pedido) = $ano_atual");
            return $query -> row_array();   
        }
        public function gerar_total($item){
            $query = $this->db->query("SELECT COUNT(*) as 'nmr_$item' FROM $item");
            return $query -> row_array();   
        }

        public function total_receita_anual($year){
            $query = $this->db->query("SELECT SUM(valor_total)-SUM(valor_70p) as '30%' FROM entregas WHERE YEAR(data_pedido) = $year");
            return $query -> row_array();   
        }
        public function gerar_numero_receita($mes,$ano_atual){
            $query = $this->db->query("SELECT SUM(valor_total)-SUM(valor_70p) as '30%' FROM entregas WHERE MONTH(data_pedido) = $mes AND YEAR(data_pedido) = $ano_atual");
            return $query -> row_array();   
        }

        public function gerar_status($mes,$status,$ano_atual){
            $query = $this->db->query("SELECT COUNT(*) as total FROM entregas WHERE YEAR(data_pedido) = $ano_atual AND status_entrega = '$status'");
            return $query -> row_array();  
        }
        public function registros($mes,$ano_atual,$tabela,$item){
            $query = $this->db->query("SELECT COUNT(*) as '$tabela' FROM $tabela WHERE MONTH($item) = $mes AND YEAR($item) = $ano_atual");
            return $query -> row_array();   
        }
}
?>