<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_model extends CI_Model {

    public function salvar($dados = null) {
        if ($dados != null) {
            $this->db->insert('cursos', $dados);
        }
    }

    public function visualizar() {
        return $this->db->get('cursos')->result_array();
    }
    
    public function deletar($id = null) {
        return $this->db->delete('cursos', array('id_curso' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
    }
}
