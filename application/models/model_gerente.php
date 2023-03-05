<?php

    class Model_gerente extends CI_Model{
    
        public function salva($gerente){

            $this->db->insert("gerente", $gerente);
        }

        public function logarGerente($email_adm, $senha_adm){
            $this->db->where("email", $email_adm);
            $this->db->where("senha", $senha_adm);
            $gerente = $this->db->get("gerente")->row_array();
            return $gerente; 
        }
    }