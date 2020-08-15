<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' :'; } ?>
        <?php bloginfo('name'); ?>
    </title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>         
</head>

<body <?php body_class(); ?>>

    <!-- wrapper -->
    <div class="wrapper">     
        <!-- header -->
        <header class="header clear fixed-top header__logo" role="banner">
            <div class="container">


                <div class="menu__home">
                    <div class="menu__home--header">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h1 class="logo-responsive">
                                        <a href="<?php bloginfo('wpurl'); ?>" title="<?php bloginfo('description'); ?>" class="navbar-brand">
                                            <?php
                                        $logo = get_theme_mod( 'baset_logo' );
                                        if($logo == "") {
                                                $logo =  get_bloginfo("template_url").'/img/logo.png';
                                        }
                                        ?>
                                            <img alt="<?php bloginfo('name'); ?>" src="<?php echo $logo; ?>" class="img-responsive" />
                                        </a>
                                </h1>
                            </div>                        
                        </div>
                    </div>
                    <nav id="menuscroll" class="navbar navbar-expand-md navbar-light">
                        <?php
                                wp_nav_menu( array(
                                    'menu'              => 'mobile',
                                    'menu_id'         => 'menu-scroll',
                                    'theme_location'    => 'mobile',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'nav-scroll',
                                    'container_id'      => 'navbarNavDropdown',
                                    'menu_class'        => 'navbar-nav',
                                    //'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    //'walker'            => new WP_Bootstrap_Navwalker()
                                    )
                                );
                        ?>
                    </nav>
                    
                </div>

                <div class="row">                    
                    <nav id="topmenu" class="navbar navbar-expand-md navbar-light"> 
                        <h1 class="logo d-none d-md-none d-lg-block">
                            <a href="<?php bloginfo('wpurl'); ?>" title="<?php bloginfo('description'); ?>" class="navbar-brand">
                            <?php
                            $logo = get_theme_mod( 'baset_logo' );
                            if($logo == "") {
                                $logo =  get_bloginfo("template_url").'/img/logo.png';
                            }
                            ?>
                                <img alt="<?php bloginfo('name'); ?>" src="<?php echo $logo; ?>" class="img-responsive" />
                            </a>
                        </h1>                        
                        <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'menu_id'         => 'menu-top-menu',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'navbar-collapse collapse justify-content-end align-self-center order-2',
                            'container_id'      => 'navbarNavDropdown',
                            'menu_class'        => 'navbar-nav',
                            //'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            //'walker'            => new WP_Bootstrap_Navwalker()
                            )
                        );
                        ?>                                       
                    </nav> 
                                
                   
                    
                                      
                </div>
            </div>    
        </header>
        <!-- /header -->
        <?php get_template_part('loops/loop', 'modal'); ?>