<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


 

    public function validaUsuario($dados = null) {
        //$this->db->where('email', $dados['email']);
        //$this->db->where('senha', $dados['senha']);
        $usuario = $this->db->get_where('usuarios', array('email' => $dados['email'], 'senha' => $dados['senha']))->row();
        return $usuario;
         
    }

    

}
