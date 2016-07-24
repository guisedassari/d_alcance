<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function validaUsuario($dados = null) {
        $usuario = $this->db->get_where('usuarios', array('email' => $dados['email'], 'senha' => $dados['senha']))->row();
        return $usuario;
         
    }

}
