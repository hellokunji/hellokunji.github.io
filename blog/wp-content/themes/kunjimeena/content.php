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
