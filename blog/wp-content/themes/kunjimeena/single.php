<?php
	get_header();
?>

<div class="blog">
    <div class="_b2">

		<?php

		if( have_posts() ):

			while( have_posts() ): the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        			<div class="_b2_head">
					    <?php the_title('<h1 class="cmn_h1 entry-title">','</h1>' ); ?>
                        <div class="_sb_details">
                            <small>By Kunji Meena on <?php the_time('F j, y'); ?> , Category: <?php the_category(' '); ?></small>
                        </div>
    			    </div>
                    <div class="cmn_flex _b2_desc">
                    	<div class="sec_main _b2s_main">
	                        <div class="_b2s_thumb">
	                            <?php the_post_thumbnail('large'); ?>
	                        </div>
	                        <div class="_b2s_content">
	                            <?php the_content(); ?>
	                        </div>
							<?php
								if( comments_open() ){
									comments_template();
								} else {
									echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
								}

							 ?>
	                    </div>

						<div class="sec_sidebar">
							<?php get_sidebar(); ?>
						</div>
                    </div>

				</article>

			<?php endwhile;

		endif;

		?>
    </div>
</div>

<?php get_footer(); ?>
