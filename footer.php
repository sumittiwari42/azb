<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage azb_theme
 * @since 1.0
 * @version 1.2
 */
?>
		</div><!-- #content -->

		<footer class="site-footer">
			<div class="footer-wrapper footer">
				<div class="container-fluid">
			    	<div class="footlogo">
				       <a href="#">
				        	<img src="assets/images/footer-logo.png" alt="">
				        </a>
				     </div>
					<?php
					 	get_template_part( 'template-parts/footer/footer', 'nav' ); 

					  	get_template_part( 'template-parts/footer/footer', 'social' );
					?>
					<div class="clear"></div>
				</div>
      		</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<style type="text/css">
		html {
    margin-top: 0px !important;
}
</style>
</body>
</html>
