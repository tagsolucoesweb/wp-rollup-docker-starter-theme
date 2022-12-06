    <div class="tagsw-single-page">
        <?php get_template_part('components/page-header/page-header', 'block');?>
        <div class="tagsw-single-page-wrapper">
            <?php if(have_posts()) : while(have_posts()): the_post();?>
                <h2><?php the_title();?></h2>
                <div class="tagsw-post-content">
                    <?php the_content();?>
                </div>
            <?php endwhile; endif;?>
        </div>
    </div>
<?php get_footer();?>