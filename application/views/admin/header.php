<?php
if (!($_SESSION['usuario_logado'])) {
    $this->session->set_flashdata("danger", "Você deve se logar primeiro");
    redirect('/');
}
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>D_alcence</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url("tema/bower_components/bootstrap/dist/css/bootstrap.min.css") ?>" rel="stylesheet">

        <!-- MetisMenu ../../tema/CSS -->
        <link href="<?= base_url("tema/bower_components/metisMenu/dist/metisMenu.min.css") ?>" rel="stylesheet">
        <!-- Timeline C../../tema/SS -->
        <link href="<?= base_url("tema/dist/css/timeline.css") ?>" rel="stylesheet">
        <!-- Custom CSS../../tema/ -->
        <link href="<?= base_url("tema/dist/css/sb-admin-2.css") ?>" rel="stylesheet">
        <link href="<?= base_url("tema/dist/css/style.css") ?>" rel="stylesheet">
        <!-- Morris Cha../../tema/rts CSS -->
        <link href="<?= base_url("tema/bower_components/morrisjs/morris.css") ?>" rel="stylesheet">

        <!-- Custom Fon../../tema/ts -->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?= $_SESSION['usuario_logado']->email ?>  <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><?= anchor('usuarios/logout', '<i class="fa fa-sign-out fa-fw"></i> Logout', 'title="sair"'); ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="wrapper container">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

