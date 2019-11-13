<?php
	get_header();
?>

	<div class="blog">
		<div class="_b2">
			<div class="_b2_head">
				<h1 class="cmn_h1">A freelance web developer's blog</h1>
			</div>
			<div class="cmn_flex _b2_desc">
				<div class="sec_main">
					<div class="_b2d_main">
						<?php
							if( have_posts() ):
								while( have_posts() ): the_post();?>
									<?php get_template_part('content',get_post_format()); ?>
								<?php endwhile;
							endif;
						?>
					</div>
				</div>
				<div class="sec_sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<!--
			<div class="_b2_head">
				<h1 class="cmn_h1"><?php bloginfo( 'name' ); ?></h1>
			</div>
			<div class="cmn_flex _b2_desc">
				<div class="_b2d_main">
					<div class="_bi">
					    <a href="<?php echo get_permalink(); ?>">
					        <div class="_bi_thumb">
					            <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
					        </div>
					        <div class="_bi_desc">
					            <h2 class="cmn_bh2">
					                <?php the_title(); ?>
					            </h2>
					            <p class="cmn_p3">
					                <?php the_excerpt(); ?>
					            </p>
					        </div>
					        <div class="_bi_footer">
					            <div class="_bif_tag">
					                <?php the_category(); ?>
					            </div>
					            <div class="cmn_p3 _bif_date">
					                <?php the_time('F j, y'); ?>
					            </div>
					            <div class="_bif_social">
					                <a class="cmn_btn" href="<?php echo get_permalink(); ?>">Read More</a>
					            </div>
					        </div>
					    </a>
					</div>
				</div>

				<div class="_blog_cat">
					<button id="_bc_icon">Cat</button>
					<div class="_bc_m">
						<p class="cmn_h3">CATEGORIES</p>
						 <?php wp_nav_menu(array('theme_location'=='category'));?>
						<a class="_bcm_link" href="/blog/fun.html">
							<span></span>
							<span>Fun (5)</span>
						</a>
						<a class="_bcm_link" href="/blog/seo.html">
							<span></span>
							<span>SEO (5)</span>
						</a>
						<a class="_bcm_link" href="/blog/design-inspirations.html">
							<span></span>
							<span>Design Inspirations (5)</span>
						</a>
						<a class="_bcm_link" href="/blog/gadget.html">
							<span></span>
							<span>Gadget (5)</span>
						</a>
					</div>
				</div>
			</div>
		-->
		</div>
	</div>

    <?php get_footer(); ?>
