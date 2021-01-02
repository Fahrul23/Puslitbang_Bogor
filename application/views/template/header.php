<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Litbang Bogor</title>
    <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/css/app.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/datepicker.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/timepicker.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/taginput.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/colorpicker.css') ?>">
 
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/styleadmin.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/chocolate.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/summernote-bs4.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/bundles/bootstrap-social/bootstrap-social.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <link rel='shortcut icon' type='image/x-icon' href="<?= base_url('assets/img/favicon.ico') ?>"/>

   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
             
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <div class="author-box-name mt-2">
             <a href="#"><?= $this->session->userdata('nama_admin'); ?></a>
          </div>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?= base_url('assets/img/user.png') ?>"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?= $this->session->userdata('nama_admin'); ?></div>
              <a href="<?= base_url('admin/profile/').$this->session->userdata('id_admin');?>" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('welcome/logout') ?>" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#"> PUSLITBANG 
            </a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" class="user-img-radius-style" src="<?= base_url('assets/img/user.png') ?>">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?= $this->session->userdata('nama_admin'); ?></div>
              <div class="user-role">Administrator</div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="dropdown">
              <a href="<?= base_url('dashboard') ?>" class="nav-link "><i data-feather="monitor"></i><span>Dashboard</span></a>
             
            </li>
            <li class="dropdown">
              <a href="<?= base_url('admin') ?>" class="nav-link "><i data-feather="users"></i><span>Admin</span></a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('flora') ?>" class="nav-link "><i data-feather="wind"></i><span>Flora</span></a>
            </li>

            <li class="dropdown">
              <a href="<?= base_url('fauna') ?>" class="nav-link "><i data-feather="feather"></i><span>Fauna</span></a>
            </li>
            
            <li class="dropdown">
              <a href="<?= base_url('artikel') ?>" class="nav-link "><i data-feather="file-text"></i><span>Artikel</span></a>
            </li>

            <li class="dropdown">
              <a href="<?= base_url('Komentar') ?>" class="nav-link "><i data-feather="file-text"></i><span>Komentar</span></a>
            </li>
            
              </ul>
            </li>
          </ul>
        </aside>
      </div>
