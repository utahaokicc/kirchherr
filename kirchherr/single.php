<?php get_header(); ?>

	<section id="schedule_low">
		<div class="content">
			<h2 class="worksans"><?php the_title(); ?></h2>
			
			<?php if ( have_posts() ) :
			while( have_posts() ) : the_post();
			?>
			<section id="schedule_detail">
				<?php the_post_thumbnail('full'); ?>
				<ul class="worksans">
					<li><span>Day</span><?php the_field('day');?></li>
					<li><span>Time</span><?php the_field('time');?></li>
					<li><span>Charge</span><?php the_field('charge');?></li>
					<li><span>Act</span><?php the_field('act');?></li>
				</ul>
				<p><?php the_content(); ?></p>
			</section>
			<a href="<?php echo home_url("/"); ?>" class="maplink worksans">back to top</a>
			<?php endwhile; endif; ?>
		</div>
	</section>
	
<?php get_footer(); ?>