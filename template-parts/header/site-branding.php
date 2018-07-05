<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage azb_theme
 * @since 1.0
 * @version 1.0
 */

?>
<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
	 <?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	?>
	<h1 class="navbar-brand">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="AZB"><img src="<?php echo $image[0]; ?>" alt=""/></a>
	</h1>
</div>
