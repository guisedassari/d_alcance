<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('table');
        $this->load->helper('div');
        $this->load->helper('array');
        $this->load->helper('form');
        $this->load->model('cursos_model', 'cursos');
        $this->load->library('form_validation');
        $this->output->enable_profiler(TRUE);
    }

    public function index() {
        $this->load->library('pagination');
        $cursos = $this->cursos->visualizar();
        
        $this->load->templete("admin/cursos/index.php", compact("cursos"));
    }

    public function add() {

        $dados = $this->input->post();
        if ($dados != null) {
            $this->cursos->salvar($dados);
            $this->session->set_flashdata("success", "Curso gravado com sucesso");
            redirect('/');
        }
        $this->load->templete("admin/cursos/add.php");
    }

    public function deleta($id) {
        $this->cursos->deletar($id);
        $this->session->set_flashdata("success", "Curso deletado com sucesso");
        redirect('/');
    }

    public function edit($id_curso) {
        if ($id_curso != null) {
            $curso = $this->cursos->visualizar_id($id_curso);
            $this->load->templete("admin/cursos/edit.php", compact("curso"));
        } else {
            redirect('/');
        }
    }

    public function editar() {
        $dados = $this->input->post();
        if ($dados != null) {
            $this->cursos->alterar($dados);
            $this->session->set_flashdata("success", "Curso alterados com sucesso");
            redirect('/');
        }
        $this->load->templete("admin/cursos/add.php");
    }

}
