<?php

if (($this->session->flashdata('success'))) {
    echo '<p class="alert alert-success">'.$this->session->flashdata('success').'</p>';
}


echo anchor('cursos/add', '<i class="fa fa-plus" aria-hidden="true"></i> Adicionar', array('class' => 'btn btn-success'));

$template = array(
    'table_open' => '<table class="table table-striped">',
);

$this->table->set_template($template);

$this->table->set_heading('Categoria', 'Modalidade', 'Curso', 'Duracção', 'Descrição', 'Modulos', 'Ordem', 'Status', 'Ações', '');
foreach ($cursos as $curso) {
    $this->table->add_row($curso['categoria'], 
            $curso['modalidade'], 
            $curso['nome_curso'], 
            $curso['duracao'], 
            $curso['descricao'], 
            $curso['modulos'], 
            $curso['ordem'], 
            $curso['status'],
            anchor("cursos/edit/{$curso['id_curso']}", '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-primary')),
            anchor("cursos/deleta/{$curso['id_curso']}", '<i class="fa fa-trash" aria-hidden="true"></i>', array('class' => 'btn btn-danger'))
                    ); 
}
echo $this->table->generate();









