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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">

            <div class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </div>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <div class="burger">
                <span class="line"></span>
                </div>
            </button>
            
            <ul class="menu">
            
            <img class= "logo" src="<?php echo get_stylesheet_directory_uri() . '/images/LOGO.png'; ?> " alt="logo">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
            
            <img class= "whiteFlower" src="<?php echo get_stylesheet_directory_uri() . '/images/white.png'; ?> " alt="fleur">
            <img class= "Hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/images/Hibiscus.png'; ?> " alt="fleur">
            <img class= "orangeFlower" src="<?php echo get_stylesheet_directory_uri() . '/images/orange.png'; ?> " alt="fleur">
            <img class= "Orchid" src="<?php echo get_stylesheet_directory_uri() . '/images/Orchid.png'; ?> " alt="fleur">
            <img class= "purpleFlower" src="<?php echo get_stylesheet_directory_uri() . '/images/purple.png'; ?> " alt="fleur">
            
            <img class= "BlackCat" src="<?php echo get_stylesheet_directory_uri() . '/images/blackCat.png'; ?> " alt="cat">
            <img class= "BlueCat" src="<?php echo get_stylesheet_directory_uri() . '/images/blueCat.png'; ?> " alt="cat">
            <img class= "OrangeCat" src="<?php echo get_stylesheet_directory_uri() . '/images/orangeCat.png'; ?> " alt="cat">
            
            <div class="footer-nav">
            <a href="#"> STUDIO KOUKAKI </a>
            </div>
            </ul>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
    
    
