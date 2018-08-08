<?php 
//(session_status() == PHP_SESSION_NONE)?session_start():null; 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGI - Sistema de Gestão Financeira de Igrejas</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/portal/res/lte/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/portal/res/lte/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/portal/res/lte/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/portal/res/lte/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/portal/res/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/portal/res/lte/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/portal/res/lte/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/portal/res/lte/plugins/datatables/dataTables.bootstrap4.css">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/portal/res/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">


  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/portal/" class="nav-link">Home</a>
      </li>
      -->
    </ul>

    <!-- SEARCH FORM -->
    <!--
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <span><?php 
          //echo (isset($_SESSION))?$_SESSION["name"]:'N/A'; 
          ?>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Informações do Usuário</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-user mr-2"></i>Nome: 
            <span class="float-right text-muted text-sm"><?php //echo $_SESSION["name"] . ' ' . $_SESSION["surname"]; ?></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i>Perfil: 
            <span class="float-right text-muted text-sm"><?php //echo $_SESSION["usertype"]; ?></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="../controllers/login_controller.php?action=logout" class="dropdown-item dropdown-footer btn btn-primary">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/portal/" class="brand-link">
      <img src="/sgi/res/lte/dist/img/payment4.png" alt="SGI" class="brand-image img-circle elevation-3"
           style="opacity: .8"> 
      <span class="brand-text font-weight-light">SGI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php 

          //var_dump($_SESSION);
          
          //$profile = $_SESSION["user_type_id"];
          
          // Presidencia ou RH
          //if ($profile == 3 || $profile == 5) {
          ?>
          <li class="nav-header">MENU DE ACESSOS</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Cadastros
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Congregações</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/sgi/classes/controllers/membro_controller.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Membros</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Fornecedores</p>
                </a>
              </li>
            </ul>


          </li>    
          </li>   

          <?php 
          // Presidencia ou Diretoria Operacional
          //if ($profile == 3 || $profile == 4) {
          ?>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-credit-card"></i>
              <p>
                Contas
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Registro de Recebimento</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Registro de Pagamento</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Relatórios
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Fluxo de Caixa</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                Controle de Acessos
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Usuários</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Perfis de Acesso</p>
                </a>
              </li>
            </ul>            
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-question"></i>
              <p>
                Ajuda
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-default">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Sobre o sistema</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->      
    </div>
    <!-- /.sidebar -->

    <!-- Modal -->
    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SISTEMA DE GESTÃO DE IGREJAS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <dl>
              <dt>DESCRIÇÃO</dt>
              <dd>Tem como objetivo gerenciar de forma simples e intuitiva o fluxo financeiro das Congregações</dd>
              <dd>Permitindo gerenciar as entradas e saídas de caixa, para todas as congregações do grupo.</dd>
              <dd>Contendo acessos especificos por perfil dos usuários, trazendo transparencia e facilidade na gestão do caixa da Igreja.</dd>
              <P>
              <dt>EQUIPE RESPONSÁVEL</dt>
              <dd>Ricardo Jesus</dd>
              <dd>Marlony Teles</dd>
              <dd>Osvaldo Neris</dd>
              <dd>Adriano</dd>
              <P>
              <dt>VERSÃO DO SISTEMA</dt>
              <dd>Versão 0.0.1 de Agosto/2018</dd>
            </dl>                       
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Voltar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->

  </aside>
