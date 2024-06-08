<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Florencia Wedding Designer</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-transparent="false" data-fullwidth="true" class="light submenu-dark">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo" style="max-width:80px">
                        <a href="index.html">
                            <span class="logo-default"><img width="200px" src="assets/logo/logo_florencia_rouge.png"></span>
                            <span class="logo-dark"><img width="200px" src="assets/logo/logo_florencia_blanc.png"></span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <div class="header-extras d-md-none d-lg-block">
                        <ul>
                            <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-tiktok"><a href="#"><img src="assets/logo/tiktok_icon.svg"></a></li>
                            <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--Navigation-->
                    <div id="mainMenu" class="menu-center">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Accueil</a></li>
                                    <li><a href="prestation.php">Prestation</a></li>
                                    <li><a href="a-propos.php">L'agence</a></li>
                                    <li><a href="galerie.php">Galerie</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- INFO SESSION -->
        <div>
            <?php if (!empty($_SESSION['flash']['success'])) {
            ?>
                <script>
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 6000);
                </script>

                <div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                    <?= $_SESSION['flash']['success'] ?>
                </div>
            <?php
            }
            unset($_SESSION['flash']['success']);

            if (!empty($_SESSION['flash']['error'])) {
            ?>
                <script>
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                            $(this).remove();
                        });
                    }, 6000);
                </script>

                <div class="alert alert-danger solid alert-dismissible fade show">
                    <div style="padding:15px;">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        <strong>Erreur!</strong> <?= $_SESSION['flash']['error'] ?>
                    </div>
                </div>
            <?php
            }
            unset($_SESSION['flash']['error']);
            ?>
        </div>
        <!-- END INFO SESSION -->