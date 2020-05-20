<?php get_header(); ?>

	<section id="news_low">
		<div class="content">
			<h2 class="worksans">KIRCHHERR <br class="sp">News</h2>
			
			<?php if ( have_posts() ) :
			while( have_posts() ) : the_post();
			?>
			<section id="news_detail">
				<p class="news_day"><?php the_time('Y.m.d'); ?></p>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</section>
			<a href="<?php echo home_url("/"); ?>" class="maplink worksans">back to top</a>
			<?php endwhile; endif; ?>
		</div>
	</section>
	
<?php get_footer(); ?>