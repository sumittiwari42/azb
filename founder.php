<?php
/* Template Name: Founder Page*/

get_header(); ?>

<section>
	<div class="partnerwrapper">
		<div class="row">
			<div class="container">
				<?php
				$founder = array( 'post_type' => 'founder', 'posts_per_page' => 3, 'order' => 'ASC');
				$founder_list = new WP_Query( $founder );
				while ( $founder_list->have_posts() ) : $founder_list->the_post();
				?>
					<div class="col-sm-4 partnerblk">
						<div class="partnerimg">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="partnername">
							<h3 class="blue-color"><?php the_title(); ?></h3>
							<div class="partnerdetails">
								<p>
								  <?php if (get_field('place') && get_field('email_name')) { ?>
										<span class="location"><i class="fa fa-suitcase" aria-hidden="true"></i> <?php echo the_field('place'); ?></span>
										<span class="mail"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo the_field('email_address'); ?>"><?php echo the_field('email_name'); ?></a></span>
									<?php } ?>
								</p>
							</div>
						</div>						
						<div class="partnertxt">
              <?php the_content(); ?>
						</div>
					</div>
				<?php
				endwhile;
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
