<?php
/* Template Name: Knowledge Bank Page*/

get_header(); ?>

<section>
	<div class="knowledgewrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-4 knowledgecont">
					<h2 class="blue-color">Inter alia</h2>
					<?php
					$practice = array( 'post_type' => 'interalia', 'posts_per_page' => -1, 'order' => 'ASC');
					$practice_list = new WP_Query( $practice );
					while ( $practice_list->have_posts() ) : $practice_list->the_post();
					$link = get_post_permalink();
					?>
						<div class="knowledgeblk">
							<p><?php the_title(); ?></p>
							<p class="articledetails blue-color"><?php the_field('date'); ?>. <span><?php the_field('author'); ?></span></p>
						</div>
					<?php
					endwhile;
					wp_reset_query(); ?>
				</div>

				<div class="col-md-4 knowledgecont">
					<h2 class="blue-color">Client Alert</h2>
					<?php
					$practice = array( 'post_type' => 'client', 'posts_per_page' => -1, 'order' => 'ASC');
					$practice_list = new WP_Query( $practice );
					while ( $practice_list->have_posts() ) : $practice_list->the_post();
					$link = get_post_permalink();
					?>
						<div class="knowledgeblk">
							<p><?php the_title(); ?></p>
							<p class="articledetails blue-color"><?php the_field('date'); ?>. <span><?php the_field('author'); ?></span></p>
						</div>
					<?php
					endwhile;
					wp_reset_query(); ?>
				</div>

				<div class="col-md-4 knowledgecont">
					<h2 class="blue-color">News</h2>
					<?php
					$practice = array( 'post_type' => 'news', 'posts_per_page' => -1, 'order' => 'ASC');
					$practice_list = new WP_Query( $practice );
					while ( $practice_list->have_posts() ) : $practice_list->the_post();
					$link = get_post_permalink();
					?>
						<div class="knowledgeblk">
							<p><?php the_title(); ?></p>
							<p class="articledetails blue-color"><?php the_field('date'); ?>. <span><?php the_field('author'); ?></span></p>
						</div>
					<?php
					endwhile;
					wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();