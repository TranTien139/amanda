<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html lang="vi" class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500,900&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/font-awesome-4.7.0/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/css/flexslider.css" media="all" />
    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/css/amanda.css" media="all" />
    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/css/style.css">
</head>
<body <?php body_class(); ?> >

<div id="page" class="homepage">
    <div id="banner_top_site">
        <div class="container">
            <div class="text-center"><img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/graphics/img_960x120.jpg" alt=""/>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo_site">&nbsp;</a>
        </div>
    </div>

    <header class="hidden-sm hidden-xs">
        <div id="wrapper_header" class="width_common">
            <div class="container">
                <div class="relative">
                    <div id="main_menu">
                        <div class="">
                            <?php wp_nav_menu(array('theme_location' => 'MainMenu', 'menu_class' => 'menu_web')); ?>
                        </div>
                    </div>
                    <div class="block_search_header">
                        <div class="relative">

                            <form role="search" method="get" class="search-form"
                                  action="<?php echo esc_url(home_url('/')); ?>">
                                <input type="text" placeholder="Tìm Kiếm ..."
                                        name="s">
                                <input type="hidden" value="post" name="post_type" id="post_type" />
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="menu_tablet" class="width_common hidden-lg hidden-md"><a href="#" class="logo"><img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/graphics/logo_site.png" alt=""/></a>
        <div class="block_hamber_menu">
            <div class="hamber"><span>&nbsp;</span> <span>&nbsp;</span> <span>&nbsp;</span></div>
            <div class="block_menu">
                <div class="width_common">
                    <?php wp_nav_menu(array('theme_location' => 'MainMenu', 'menu_class' => 'menu_web')); ?>
                </div>
            </div>
        </div>
    </div>

