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
        $dados = $this->input->post();
        
        debbug($dados);
        if ($dados != null) {
            $this->load->model('cursos_model', 'cursos');
            $this->cursos->salvar($dados);
        }
        $this->load->templete("admin/cursos/add.php");
    }

}
