<?php get_header(); ?>
	
	<section id="intro">
		<div class="content">
			<a href="#news">
				<h1 class="worksans">KIRCHHERR<br>
				is Music <br>
				&amp; Culture Space<br>
				in Tamachi, <br>Hamamatsu-City, <br>
				Shizuoka pref.<br>
				since 2014.</h1>
			</a>
		</div>
	</section>
	
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
		</div>
	</section>
	
	<section id="schedule">
		<div class="content fadein">
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
			  'posts_per_page' => 10, 
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
			<a href="<?php echo home_url("/"); ?>schedule/" class="linkbox worksans">
				View All
			</a>
		</div>
	</section>
	
	<section id="info">
		<div class="content fadein">
			<h2 class="worksans">KIRCHHERR?</h2>
			<p class="worksans">KIRCHHERR is Music &amp; Culture Space in Tamachi, Hamamatsu-City, Shizuoka pref, Japan.since 2014.</p>
			<p>2014年秋にオープンした、静岡県浜松市の音楽&amp;カルチャースペース「キルヒヘア」<br>
			ROCK/JAZZ/POPS/DANCE/演劇/落語/映画/展覧会/DJ EVENT etc.<br class="sp">
			様々なイベントを開催。スペースとしてのご利用も。</p>
			<p class="worksans">Kagiya Building B1F, 229-13 Tamachi, Naka-ku, Hamamatsu City, Shizuoka Pref, JAPAN</p>
			<p>静岡県浜松市中区田町229-13 カギヤビル地下１階</p>
			<a href="https://www.google.com/maps/place/%E3%80%92430-0944+%E9%9D%99%E5%B2%A1%E7%9C%8C%E6%B5%9C%E6%9D%BE%E5%B8%82%E4%B8%AD%E5%8C%BA%E7%94%B0%E7%94%BA%EF%BC%92%EF%BC%92%EF%BC%99%E2%88%92%EF%BC%91%EF%BC%93+%E3%81%8B%E3%81%8E%E3%82%84%E3%83%93%E3%83%AB/data=!4m2!3m1!1s0x601ade64ce018e97:0x483b58b0e5e56a1a?sa=X&ved=2ahUKEwi42-Paz7_pAhVVFogKHdyMCAsQ8gEwAXoECAsQAQ" class="maplink worksans" target="_blank">Google Map</a>
			<h3 class="worksans">Contact</h3>
			<p class="worksans"><a href="m&#97;i&#108;t&#111;:k&#105;r&#99;&#104;h&#101;&#114;&#114;&#46;b&#49;&#102;&#64;gmail.&#99;&#111;&#109;?subject=お問い合わせ&amp;body=お問い合わせ内容をご入力ください。">k&#105;r&#99;&#104;h&#101;&#114;&#114;&#46;b&#49;&#102;&#64;gmail.&#99;&#111;&#109;</a></p>
			<p>お問い合わせ・出演依頼・イベント企画のご相談については上記メールアドレスまでお気軽にご連絡ください。<br>確認後ご返信させていただきます。</p>
			<h3 class="worksans">Equipment</h3>
			<h4 class="worksans">Guitar Amp</h4>
			<p class="worksans">Marshall Amp JCM800 Cabinet 1960A / Fender Hot Rod Devile / roland jc-120</p>
			<h4 class="worksans">BASS</h4>
			<p class="worksans">Cabinet trace elliot 4x10  / Amp trace elliot ah350</p>
			<h4 class="worksans">Microphone</h4>
			<p class="worksans">SM58 *4 / SM57 *3 / Beta58 *1</p>
			<h4 class="worksans">PA</h4>
			<p class="worksans">Mixer Yamaha mg20xu / Power Distributor Classic Pro PDM/LSII <br>Effector tc electronic M350 / Main SP EQ dbxiEQ-31 <br>Monitor SP EQ Behringer FBQ3102HD <br>Main Speaker yamaha dsr15 2 / Sub Speaker Classic Pro cp10mp 2</p>
		</div>
	</section>
	<section id="info_img" class="fadein"><img src="<?php echo home_url("/"); ?>img/img_interia.jpg" alt=""></section>
	
	<section id="sis">
		<div class="content fadein">
			<h2 class="worksans">SISTER STORE</h2><h3>浜松シーシャ キルヒヘア</h3>
			<p>浜松市中区田町カギヤビル地下にて営業しておりました。新店舗6月オープン予定。<br>
				現在中区萩丘ROBA NO MIMI様のシーシャスペースを間借りして営業中。月曜定休です。<br>
				平日17:00-土日祝12:00- LastOrder22:30 シーシャ¥1,500~ワンドリンク制¥500~</p>
			<a href="https://twitter.com/KIRCH_Shisha" target="_blank" class="maplink worksans">Twitter</a>
		</div>
	</section>
	
<?php get_footer(); ?>