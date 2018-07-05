<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage azb_theme
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<nav class="navbar">
			<div class="container-fluid">
				<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<div class="collapse navbar-collapse" id="myNavbar">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .navigation-top -->
				<?php endif; ?>
			</div>
		</nav>

	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
		<?php if(get_field('banner')) { ?>
		<section>
			<div class="banner">
				<img src="<?php the_field('banner'); ?>" alt="" title="" />
				<h2><?php the_title(); ?></h2>
			</div>
		</section>
   <?php } ?>
