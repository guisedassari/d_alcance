<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_model extends CI_Model {

    public function salvar($dados = null) {
        if ($dados != null) {
            $this->db->insert('cursos', $dados);
        }
    }

    public function visualizar() {
        return $this->db->get('cursos');
    }

}
