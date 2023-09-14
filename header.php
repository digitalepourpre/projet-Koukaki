<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intersection-observer/2.0.4/intersection-observer.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
        </div>
        <div id="mySidenav" class="sidenav">
            <div class="burger-title site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                <a id="closeBtn" href="#" class="close">X</a>
            </div>
            <img class="orangecat-burger-float" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/chat-orange.png"; ?>" alt="image d'un chat orange"> 
            <img class="blackcat-burger-float" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/chat-noir.png"; ?>" alt="image d'un chat noir"> 
            <img class="bluecat-burger-float" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/chat-bleu.png"; ?>" alt="image d'un chat bleu"> 
            <img class="orange-burger-rotate" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/fleur-orange.png"; ?>" alt="image d'une fleur orange"> 
            <img class="blanche-burger-rotate" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/fleur-blanche.png"; ?>" alt="image d'une fleur blanche"> 
            <img class="hibiscus-burger-rotate" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/hibiscus.png"; ?>" alt="image d'un hibiscus"> 
            <img class="orchid-burger-rotate" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/orchid.png"; ?>" alt="image d'une orchidée">
            <img class="rose-burger-rotate" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/fleur-rose.png"; ?>" alt="image d'une fleur"> 
            <ul>
                <li><img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/logo.png"; ?>" alt="logo de koukaki">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
                <li><p>STUDIO KOUKAKI</p><li>
            </ul>
        </div>
	</header>

