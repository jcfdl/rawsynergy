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
		<div class="main-navigation mb-4">
			<div class="site-branding">
				<img src="<?= get_template_directory_uri() . '/Assets/Icons/Layer 2-1.svg'?>">
			</div><!-- .site-branding -->
			<div class="responsive-navigation nav-open">				
			</div>
			<nav id="site-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
			<div class="contact-navigation">
				<img src="<?= get_template_directory_uri() . '/Assets/Icons/phone.svg'?>">
				<span class="contact-number">(08) 8263 0499</span>
			</div>
		</div><!-- .main-navigation -->
		<div class="site-branding-big">
			<img src="<?= get_template_directory_uri() . '/Assets/Icons/Layer 2.svg'?>">
		</div>
	</header><!-- #masthead -->
	<?= get_post_meta(get_the_ID(), 'top_header', true); ?>
	<?php if(!empty(get_post_meta(get_the_ID(), 'page_header', true))): ?>
		<div class="page-information">	
			<div class="page-information-content">
				<div class="page-header">
					<?= get_post_meta(get_the_ID(), 'page_header', true); ?>
				</div>
				<div class="page-description">
					<?= get_post_meta(get_the_ID(), 'page_description', true); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div id="content" class="site-content">
