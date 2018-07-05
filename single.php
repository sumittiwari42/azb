<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage azb_theme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			if ( post_type_exists( 'practice' ) ) {
                get_template_part( 'template-parts/post/practice', 'content' ); 
            }
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
