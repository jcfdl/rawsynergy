<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rawsynergy
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
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<img src="<?= get_template_directory_uri() . '/Assets/Icons/Layer 2-1.svg'?>">
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> -->
				<?php //esc_html_e( 'Primary Menu', 'rawsynergy' ); ?>
			<!-- </button> -->
			<?php
			// wp_nav_menu( array(
			// 	'theme_location' => 'menu-1',
			// 	'menu_id'        => 'primary-menu',
			// ) );
			?>
		</nav><!-- #site-navigation -->
		<div class="site-branding-big">
			<img src="<?= get_template_directory_uri() . '/Assets/Icons/Layer 2.svg'?>">
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
