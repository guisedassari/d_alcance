<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('table');
        $this->load->helper('div');
        $this->load->helper('array');
        $this->load->library('form_validation');
    }

    public function index() {

        $this->load->templete("admin/cursos/index.php");
    }

    public function add() {
        $this->form_validation->set_rules('categoria', 'CATEGORIAAA', 'required|max_length[12]');

        if ($this->form_validation->run() == true) {
          $dados = elements(array('categoria','modalidade','status'), $this->input->post());
          
          $this->load->model('cursos_model','cursos');
          $this->cursos->salvar($dados);
        } 

        $this->load->templete("admin/cursos/add.php");
    }

}
