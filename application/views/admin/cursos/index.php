<?php

echo anchor('cursos/add', '<i class="fa fa-plus" aria-hidden="true"></i> Adicionar', array('class' => 'btn btn-primary'));

$template = array(
    'table_open' => '<table class="table table-striped">',
);

$this->table->set_template($template);

$this->table->set_heading('Categoria', 'Modalidade', 'Curso', 'Duracção', 'Descrição', 'Modulos', 'Ordem', 'Status', 'Ações');

$this->table->add_row('Curso Tecnico', 'A Distancia', 'Curso de Informatica', '6 Meses', 'Curso Muito Bom', 'asdfasdfasf', '1', 'Ativo', 'Eiditar Excluir');

echo $this->table->generate();

foreach ($dados as $dado) {
    var_dump($dado);    
}