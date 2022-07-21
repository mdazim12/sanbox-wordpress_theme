<!DOCTYPE html>
<html lang="<?php language_attributes();?>">


<!-- Mirrored from sandbox.elemisthemes.com/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 20:55:41 GMT -->

<head>
    <meta charset="<?php bloginfo();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="preload" href="" as="style" onload="this.rel='stylesheet'">
    <?php wp_head(  );?>
</head>

<nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none">
    <div class="container">
        <div
            class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
            <div class="navbar-brand w-100">
                <a href="./index.html">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png;" srcset="./assets/img/logo@2x.png 2x" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <a href="./index.html"><img src="./assets/img/logo-light.png"
                            srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle"
                                        href="#" data-bs-toggle="dropdown">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown dropdown-submenu dropend"><a
                                                class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="#">Another
                                                        Action</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">Mega Menu</a>
                            <ul class="dropdown-menu mega-menu">
                                <li class="mega-menu-content">
                                    <div class="row gx-0 gx-lg-3">
                                        <div class="col-lg-6">
                                            <h6 class="dropdown-header">One</h6>
                                            <div class="row gx-0">
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li><a class="dropdown-item" href="#">Link</a></li>
                                                        <li><a class="dropdown-item" href="#">Link</a></li>
                                                        <li><a class="dropdown-item" href="#">Link</a></li>
                                                    </ul>
                                                </div>
                                                <!--/column -->
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li><a class="dropdown-item" href="#">Link</a></li>
                                                        <li><a class="dropdown-item" href="#">Link</a></li>
                                                        <li><a class="dropdown-item" href="#">Link</a></li>
                                                    </ul>
                                                </div>
                                                <!--/column -->
                                            </div>
                                            <!--/.row -->
                                        </div>
                                        <!--/column -->
                                        <div class="col-lg-3">
                                            <h6 class="dropdown-header">Two</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Link</a></li>
                                                <li><a class="dropdown-item" href="#">Link</a></li>
                                                <li><a class="dropdown-item" href="#">Link</a></li>
                                            </ul>
                                        </div>
                                        <!--/column -->
                                        <div class="col-lg-3">
                                            <h6 class="dropdown-header">Three</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Link</a></li>
                                                <li><a class="dropdown-item" href="#">Link</a></li>
                                                <li><a class="dropdown-item" href="#">Link</a></li>
                                            </ul>
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <!--/.row -->
                                </li>
                                <!--/.mega-menu-content-->
                            </ul>
                            <!--/.dropdown-menu -->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown Large</a>
                            <div class="dropdown-menu dropdown-lg">
                                <div class="dropdown-lg-content">
                                    <div>
                                        <h6 class="dropdown-header">One</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="#">Link</a></li>
                                            <li><a class="dropdown-item" href="#">Link</a></li>
                                            <li><a class="dropdown-item" href="#">Another Link</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.column -->
                                    <div>
                                        <h6 class="dropdown-header">Two</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="#">Link</a></li>
                                            <li><a class="dropdown-item" href="#">Link</a></li>
                                            <li><a class="dropdown-item" href="#">Another Link</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.column -->
                                </div>
                                <!-- /auto-column -->
                            </div>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                        <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                        <br /> 00 (123) 456 78 90 <br />
                        <nav class="nav social social-white mt-4">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /offcanvas-nav-other -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item dropdown language-select text-uppercase">
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.navbar-collapse-wrapper -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->
