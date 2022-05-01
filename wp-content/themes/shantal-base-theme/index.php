<?php get_header();?>
    <div class="main">
        <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
                <div class="default-page-header">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="default-page-content">
                    <?php the_content();?>
                </div>
            <?php endwhile;?>
        <?php endif;?>
    </div>

<?php get_footer();?>
