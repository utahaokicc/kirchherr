<?php get_header(); ?>

	<section id="schedule" class="schedule_arc">
		<div class="content">
			<h2 class="worksans">KIRCHHERR <br class="sp">Schedule</h2>
			<div class="schedule_box pc">
				<ul class="worksans">
					<li>Title</li>
					<li>Day</li>
					<li>Time</li>
					<li>Charge</li>
					<li>Act</li>
				</ul>
			</div>
			<?php
			$args = array(
			  'post_type' => 'schedule', 
			  'posts_per_page' => -1, 
			);
			?> 
			<?php $my_query = new WP_Query( $args ); ?>
			<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="schedule_box">
					<ul class="worksans">
							<li><?php the_title(); ?></li>
							<li><?php the_field('day');?></li>
							<li><?php the_field('time');?></li>
							<li><?php the_field('charge');?></li>
							<li><?php the_field('act');?></li>
					</ul>
				</a>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<a href="<?php echo home_url("/"); ?>" class="linkbox worksans">back to top</a>
		</div>
	</section>
	
<?php get_footer(); ?>