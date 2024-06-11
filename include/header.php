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
                        <a href="/">
                            <span class="logo-default"><img width="200px" src="assets/logo/logo_florencia_rouge.png"></span>
                            <span class="logo-dark"><img width="200px" src="assets/logo/logo_florencia_blanc.png"></span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <div class="header-extras d-none d-lg-block">
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
                                    <li><a href="index">Accueil</a></li>
                                    <li><a href="prestation">Prestation</a></li>
                                    <li><a href="a-propos">L'agence</a></li>
                                    <li><a href="galerie">Galerie</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="blog">Blog</a></li>
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

                <div role="alert" class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                    <?= $_SESSION['flash']['error'] ?>
                </div>
            <?php
            }
            unset($_SESSION['flash']['error']);
            ?>
        </div>
        <!-- END INFO SESSION -->