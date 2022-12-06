<?php get_header();?>
    <div class="main page-default page-<?= $post->post_name;?>">
        <?php if(have_posts()):?>
            <?php get_template_part('components/page-header/page-header', 'block', $default_page);?>
            <div class="tagsw-page-content-outer">
                <div class="tagsw-page-content-inner">
                    <?php get_the_content();?>
                </div>
            </div>
        <?php endif;?>
    </div>
<?php get_footer();?>