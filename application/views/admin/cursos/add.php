<?php
echo form_open('cursos/add', array('rule' => 'form', 'class' => 'form_add'));
echo form_label('Categoria');
echo form_input(array('class' => 'form-control', 'name' => 'categoria', 'id' => 'categoria', set_value('categoria'), 'autofocus' => 'true'));
echo validation_errors('<p class="alert alert-danger">', '</p>');
echo form_label('Modalidade');
echo form_input(array('class' => 'form-control', 'name' => 'modalidade'));
echo form_label('Nome do Curso');
echo form_input(array('class' => 'form-control', 'name' => 'nome_curso'));
echo form_label('Duração');
echo form_input(array('class' => 'form-control', 'name' => 'duracao'));
echo form_label('Descrição');
echo form_textarea(array('class' => 'form-control', 'name' => 'descricao'));
echo form_label('Modulos');
echo form_textarea(array('class' => 'form-control', 'name' => 'modulos'));
echo form_label('Ordem');
echo form_input(array('class' => 'form-control', 'name' => 'ordem', 'type' => 'number'));
echo form_label('Status');
echo form_dropdown(array('class' => 'form-control','name' => 'status', ), array('ativo' => 'Ativo','inativo' => 'Inativo'));
echo form_button(array('class'=> 'btn btn-info','type' => 'submit','content'=> '<i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar'));
echo form_close();
