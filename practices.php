<?php
/* Template Name: Practice Area Page*/

get_header(); ?>

<section>
	<div class="practicewrap">
		<div class="container">
			<ul class="commonlist">
				<?php
				$practice = array( 'post_type' => 'practice', 'posts_per_page' => -1, 'order' => 'ASC');
				$practice_list = new WP_Query( $practice );
				while ( $practice_list->have_posts() ) : $practice_list->the_post();
				$link = get_post_permalink();
				?>
					<li><a href="<?php echo $link; ?>"><?php the_title(); ?></a></li>
				<?php
				endwhile;
				wp_reset_query(); ?>
			</ul>
		</div>
	</div>
</section>				


<?php get_footer();
