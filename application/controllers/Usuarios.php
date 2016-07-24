<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model', 'usuarios');
    }

    public function index() {
        $this->load->view('admin/login');
    }

    public function login() {
        $dados = $this->input->post();
        $usuario = $this->usuarios->validaUsuario($dados);
        if ($usuario) {
            $this->session->set_userdata('usuario_logado', $usuario);
             $this->session->set_flashdata("success", "Bem vindo");
             redirect('cursos/index');
        } else {
            $this->session->set_flashdata("danger", "Usuario ou senha invalidos");
            redirect('/');
        }
        
    }
    
    public function logout() {
        unset($_SESSION['usuario_logado']);
        redirect('/');
    }

}
