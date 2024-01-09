<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('assets/admin/images/logo.png'); ?>" type="image/ico" />

  <title>My TR ecoprint</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- NProgress -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/iCheck/skins/flat/green.css'); ?>">
  <!-- Box Icon -->
  <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>

  <!-- bootstrap-progressbar -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/jqvmap/dist/jqvmap.min.css'); ?>">
  <!-- bootstrap-daterangepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>">

  <!-- Custom Theme Style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/build/css/custom.min.css'); ?>">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col position-fixed" id="sticky-sidebar">
        <div class="left_col scroll-view">
          <div class="navbar nav_title " style="border: 0;">
            <a href="index.html" class="site_title"><img src="<?php echo base_url('assets/admin/images/logo.png'); ?>" width="50"> <span>My TR ecoprint</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo base_url('assets/admin/images/profile.png'); ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo site_url('adminpanel/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard </a></li>
                <li><a href="<?php echo site_url('produk'); ?>"><i class="fa fa-folder-open"></i> Product </a></li>
                <li><a href="<?php echo site_url('kategori'); ?>"><i class="fa fa-tags"></i> Category </a></li>
                <li><a href="<?php echo site_url('order'); ?>"><i class="fa fa-users"></i> Order </a></li>
                <li><a href="<?php echo site_url('user'); ?>"><i class="fa fa-photo"></i> User </a></li>
                <li><a href="<?php echo site_url('report'); ?>"><i class="fa fa-plane"></i> Daily Report </a></li>
                <li><a href="<?php echo site_url('#'); ?>"><i class="fa fa-comments"></i> Feedback </a></li>
                <li><a href="<?php echo site_url('adminpanel/logout'); ?>"><i class="fa fa-sign-out"></i> Logout </a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>