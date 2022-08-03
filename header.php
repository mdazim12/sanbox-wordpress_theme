<?php Global $sanbox;?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">


<!-- Mirrored from sandbox.elemisthemes.com/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 20:55:41 GMT -->

<head>
    <meta charset="<?php bloginfo();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="preload" href="" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    <?php wp_head( );?>
</head>

<nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none <?php if(is_user_logged_in()) echo 'top_class';?>">
    <div class="container">
        <div
            class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
            <div class="navbar-brand w-100">
                <a href="<?php echo esc_url(home_url() );?>">
                    <img src="<?php echo $sanbox ['header_logo']['url'];?>" alt="" />
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

                <?php
                    wp_nav_menu(array(
                        'theme_location'    =>'primary_menu',
                        'depth'           => 2,
                        'menu_class'        =>'navbar-nav',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'walker'         => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                  
                  
                    
                </div>
                
            </div> 


            <!-- /.navbar-collapse -->
            
            <!-- /.navbar-other -->
        </div>
        <!-- /.navbar-collapse-wrapper -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->
