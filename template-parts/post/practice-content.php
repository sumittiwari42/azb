<?php
/**
 * Template part for displaying video posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage azb_theme
 * @since 1.0
 * @version 1.2
 */

?>
<?php $cat = get_the_title(); ?>
<section>
	<div class="infotechwrapper">
		<div class="container">
			<div class="mainwrapper">
				<div class="practicearea-tabs col-md-3">
					<h4>PRACTICE AREA</h4>
					<ul>
						<?php
						$practice = array( 'post_type' => 'practice', 'posts_per_page' => -1, 'order' => 'ASC');
						$practice_list = new WP_Query( $practice );
						while ( $practice_list->have_posts() ) : $practice_list->the_post();
						$link = get_post_permalink();
						$ptitle = get_the_title(); 
						?>
							<li><a class="<?php if($cat == $ptitle) {echo "active";} ?>" href="<?php echo $link; ?>"><?php the_title(); ?></a></li>
					<?php
						endwhile;
						wp_reset_query(); ?>
					</ul>
				</div>
				<div class="col-md-9 maincontent">
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
         
					<div class="memberwrap">
						<h4>CONTACT A MEMBER OF OUR TEAM</h4>
						<div class="row">
						<?php
							$team = array( 'post_type' => 'team', 'posts_per_page' => -1, 'order' => 'ASC', 'team_categories' => $cat);
							$team_list = new WP_Query( $team );
							if($team_list->have_posts()) {
							while ( $team_list->have_posts() ) : $team_list->the_post();
							$link = get_post_permalink();
						?>
							<div class="col-md-4 col-sm-6 partnerblk">
								<div class="partnerimg">
									<?php the_post_thumbnail(); ?>
								</div>
								<?php if (get_field('email_name') && get_field('role') && get_field('place')) { ?>
								<div class="partnername">
									<h3 class="blue-color"><?php the_title(); ?></h3>
									<p class="teamposition"><?php echo the_field('role'); ?></p>
									<div class="partnerdetails">
										<p>
											<span class="location"><i class="fa fa-suitcase" aria-hidden="true"></i> Delhi</span>
											<span class="mail"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo the_field('email_id'); ?>"><?php echo the_field('email_name'); ?></a></span>
										</p>
									</div>
								</div>	
								<?php } ?>
							</div>
					  <?php
					  	endwhile;
					  	wp_reset_query(); 
					  }
					  else { ?>
							<div class="no-team">
								No Team Member
							</div>
					  <?php }
					  ?>
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar">
				<div class="sidebarblk">
					<h4>ACCOLADES</h4>
					<ul>
					  <?php
						$practice = array( 'post_type' => 'accolades', 'posts_per_page' => 5, 'order' => 'desc');
						$practice_list = new WP_Query( $practice );
						while ( $practice_list->have_posts() ) : $practice_list->the_post();
						$link = get_post_permalink();
						$ptitle = get_the_title(); 
						?>
							<li><a href="#"><?php the_title(); ?></a></li>
					<?php
						endwhile;
						wp_reset_query(); ?>
					</ul>
				</div>
				<div class="sidebarblk">
					<h4>RECENT PUBLICATIONS</h4>
					<ul>
					<?php
						$practice = array( 'post_type' => 'publication', 'posts_per_page' => 5, 'order' => 'desc');
						$practice_list = new WP_Query( $practice );
						while ( $practice_list->have_posts() ) : $practice_list->the_post();
						$link = get_post_permalink();
						$ptitle = get_the_title(); 
						?>
							<li><a href="#"><?php the_title(); ?></a></li>
					<?php
						endwhile;
						wp_reset_query(); ?>
					</ul>
				</div>
				<div class="sidebarblk">
					<img src="http://togglehead.net/azb-new/wp-content/uploads/sidebar.png" alt="" title="" />
					<p>Endiae vel et magnimus essita natur moluptium venis.</p>
				</div>
			</div>
		</div>
	</div>
</section>

