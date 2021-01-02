
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Badan Litbang Dan Inovasi Bogor</title>   
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url('assests/img/img13.jpg')?>">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css') ?>">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
    <!-- slick css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.min.css') ?>">
    <!-- stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- responsive -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/mystyle.css') ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>

<body>

    <!-- ============Start Navigation ===== -->
     <nav class="navbar navbar-area navbar-expand-lg navbar-light bg-zoo">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand logo" href="index.html">
                    <img src="<?= base_url('assets/img/img13.jpg') ?>" width="60" alt="logo image">
                    <h4 style="display:inline; margin-left:8px;">Puslitbang Bogor</h4>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= base_url('home') ?>">
                            Beranda
                        </a>
                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/tentang_kami') ?>">Tentang Kami </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/galeri') ?>">Galleri </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/kontak_kami') ?>">Kontak Kami </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/artikel') ?>">Artikel</a>
                    </li>
                </ul>
            </div>
            <div class="right-btn-wrapper">
                <a href="<?= base_url('welcome') ?>" class="boxed-btn" style="width: 200px" target="_blank" >Login</a>
            </div>
           
    
        </div>
    </nav>
