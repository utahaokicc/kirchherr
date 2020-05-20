<?php get_header(); ?>

	<section id="news">
		<div class="content fadein">
			<h2 class="worksans">KIRCHHERR <br class="sp">News</h2>
			<ul>
				<?php
					$toplist = array(
						'post_type' => array('news'),
						'showposts' => 3,
						);
					?>
				<?php query_posts($toplist); ?>
				<?php if (have_posts()):while(have_posts()):the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
						<dl>
							<dt class="worksans"><?php the_time('Y.m.d'); ?></dt>
							<dd><?php the_title(); ?></dd>
						</dl>
						</a>
					</li>
				<?php endwhile; endif; ?>
			</ul>
			<a href="<?php echo home_url("/"); ?>" class="linkbox worksans">back to top</a>
		</div>
	</section>
	
<?php get_footer(); ?>