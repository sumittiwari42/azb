<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage azb_theme
 * @since 1.0
 * @version 1.2
 */

?>

	<?php wp_nav_menu( array(
		'menu_class' => 'nav navbar-nav navbar-right',
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

<!-- #site-navigation -->
