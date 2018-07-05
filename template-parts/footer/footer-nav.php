<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage azb_theme
 * @since 1.0
 * @version 1.0
 */

?>
<div class="footnav">

		<?php if ( has_nav_menu( 'footer-one' ) ) : ?>
			<div class="footer-one">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-one' ) ); ?>
			</div><!-- .navigation-top -->
		<?php endif; ?>

</div><!-- #site-navigation -->
<div class="footcopyright">
	<i class="fa fa-copyright" aria-hidden="true"></i> 2018 AZB &amp; Partners
</div>