<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <?php // Google Chrome Frame for IE ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(''); ?></title>
        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100italic,300italic,400italic|Open+Sans:300,600,700' rel='stylesheet' type='text/css'>
    </head>
    <body <?php body_class(); ?>>
        <div id="container">
            <header id="header" role="banner">
                <div id="inner-header">
                    <div id="logo" class="cf">
                        <a href="<?php echo home_url(); ?>" rel="nofollow">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/logo_green_v2.png" /><br />
                        </a>
                        <div class="tagline-desktop">
                            <h4>Web Development</h4>
                            <span>&amp;</span>
                            <h4>Design</h4>
                        </div>
                    </div>
                    <nav role="navigation" class="cf">
						<?php wp_nav_menu(array(
                            'container' => false,                           // remove nav container
                            'container_class' => 'menu cf',           // class of container (should you choose to use it)
                            'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                            'menu_class' => 'nav top-nav cf',         // adding custom nav class
                            'theme_location' => 'main-nav',                 // where it's located in the theme
                            'before' => '',                                 // before the menu
                            'after' => '',                                  // after the menu
                            'link_before' => '',                            // before each link
                            'link_after' => '',                             // after each link
                            'depth' => 0,                                   // limit the depth of the nav
                            'fallback_cb' => 'bones_main_nav_fallback'      // fallback function
                        )); ?>
                    </nav>
                    <div class="mobile-nav-button">
                        <span>menu</span>
                    </div>
                </div>
            </header>
            <div class="mobile-nav-dropdown cf" style="display: none;">
                <?php wp_nav_menu(array(
                            'container' => false,                           // remove nav container
                            'container_class' => 'menu clearfix',           // class of container (should you choose to use it)
                            'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                            'menu_class' => 'nav top-nav clearfix',         // adding custom nav class
                            'theme_location' => 'main-nav',                 // where it's located in the theme
                            'before' => '',                                 // before the menu
                            'after' => '',                                  // after the menu
                            'link_before' => '',                            // before each link
                            'link_after' => '',                             // after each link
                            'depth' => 0,                                   // limit the depth of the nav
                            'fallback_cb' => 'bones_main_nav_fallback'      // fallback function
                        )); ?>
            </div>
            <div class="tagline-mobile">
                <h4>Web Development &nbsp;&amp;&nbsp; Design</h4>
            </div>
