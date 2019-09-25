<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRS</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="AdminLTE-2.4.18/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="AdminLTE-2.4.18/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="AdminLTE-2.4.18/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="AdminLTE-2.4.18/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="AdminLTE-2.4.18/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="AdminLTE-2.4.18/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="AdminLTE-2.4.18/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="AdminLTE-2.4.18/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="AdminLTE-2.4.18/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="AdminLTE-2.4.18/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">SRS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">NOVALICHES</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><b>Welcome</b></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">RDU RECEIVING</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>VIEW/PROCESS<br>TRANSFER (IN and OUT)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-circle-o"></i>Receive Transfer</a></li>
            <li><a href="<?php echo base_url(); ?>receive_dispatch"><i class="fa fa-circle-o"></i> Dispatch Transfer</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>