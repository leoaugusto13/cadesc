<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Responsavel por verificar o titulo na Página De Acesso -->

<?php
  if(isset($titulo)){

    echo '<title>'. $titulo . '</title>';
  } else {
    echo '<title>Administração - CADESC</title>';
  }
?>
   
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('public/dist/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('public/dist/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url ('public/dist/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url ('public/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url ('public/css/skin-blue.min.css') ?>">

  <link rel="stylesheet" href="<?php echo base_url ('public/css/admin_cadesc.css') ?>">
  <!-- Plugin Data-Tables -->
  <link rel="stylesheet" href="<?php echo base_url ('public/dist/data-tables/datatables.min.css') ?>">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CAD</b>ESC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cadastro de Escolas</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url('admin/login/sair')?>">Sair do Sistema <i class="fa fa-share-square-o"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li><a href= "<?php echo base_url('admin/principal')?>"><i class="fa fa-list-ol"></i><span>Principal</span></a></li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-book"></i> <span>Cadastros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-home"></i>Escolas</a></li>
            <li><a href="../../index2.html"><i class="fa fa-building-o"></i>Prédios</a></li>
          </ul>
          <a href="#">
          <i class="fa fa-search"></i><span>Consultas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index2.html"><i class="fa fa-home"></i>Escolas</a></li>
            <li><a href="../../index.html"><i class="fa fa-pencil"></i>Escolas Simplificadas</a></li>
            <li><a href="../../index2.html"><i class="fa fa-building-o"></i>Prédios</a></li>
            </ul>
            <a href="#">
            <i class="fa fa-lock"></i><span>Controle de Acessos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-suitcase"></i>Alterar Senha</a></li>
            <li><a href="#"><i class="fa fa-comment"></i>Grupos</a></li>
            <li><a href="#"><i class="fa fa-comments"></i>Grupos | Usuários</a></li>
            <li><a href="#"><i class="fa fa-tasks"></i>Módulos</a></li>
            <li><a href="#"><i class="fa fa-exclamation-circle"></i>Permissões</a></li>
            <li><a href="<?php echo base_url('admin/usuarios')?>"><i class="fa fa-users"></i>Usuários</a></li>
            </ul>
          <a href="#">
          <i class="fa fa-table"></i><span>Tabelas Básicas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index2.html"><i class="fa fa-code"></i>Cursos Profissionais</a></li>
            <li><a href="../../index.html"><i class="fa fa-home"></i>Distritos</a></li>
            <li><a href="../../index2.html"><i class="fa fa-suitcase"></i>Dependências Adm</a></li>
            <li><a href="../../index2.html"><i class="fa fa-keyboard-o"></i>Entidades Mantenedoras</a></li>
            <li><a href="../../index2.html"><i class="fa fa-pencil"></i>Modalidades de Ensino</a></li>
            <li><a href="<?php echo base_url('admin/municipios')?>"><i class="fa fa-globe"></i>Municípios</a></li>
            <li><a href="../../index2.html"><i class="fa fa-picture-o"></i>Quadros de Ensino</a></li>
            <li><a href="../../index2.html"><i class="fa fa-road"></i>Regionais</a></li>
            <li><a href="../../index2.html"><i class="fa fa-subway"></i>Regionais|Municípios</a></li>
            <li><a href="../../index2.html"><i class="fa fa-file-text-o"></i>Situações Funcionamento</a></li>
            <li><a href="../../index2.html"><i class="fa fa-flag-o"></i>Tipos de Atos</a></li>
            <li><a href="../../index2.html"><i class="fa fa-fort-awesome"></i>Tipos de Ensino</a></li>
            <li><a href="../../index2.html"><i class="fa fa-university"></i>Tipos de Escolas</a></li>
            <li><a href="../../index2.html"><i class="fa fa-map-signs"></i>Tipos de Localização</a></li>
            <li><a href="../../index2.html"><i class="fa fa-graduation-cap"></i>Tipos de Ocupação</a></li>
          </ul>
        </li>
        <li><a href= "<?php echo base_url('admin/login/sair')?>"><i class="fa fa-share-square-o"></i><span>Sair</span></a></li>
       
  </section> <!-- /.sidebar -->
  </aside>
  

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
     <?php
        if(isset($view)){
          $this->load->view($view);
        }


      ?>

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Cadastro de Escolas e Prédios</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019  - Leonardo Augusto</a>.</strong> All rights
    reserved.
  </footer>

 
<!-- jQuery 3 -->
<script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('public/dist/bootstrap/js/bootstrap.min.css')?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('public/dist/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('public/dist/fastclick/lib/fastclick.js')?>"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="<?php echo base_url('public/dist/data-tables/datatables.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('public/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('public/js/demo.js')?>"></script>
<!-- Main -->
<script src="<?php echo base_url('public/js/main.js')?>"></script>

</body>
</html>
