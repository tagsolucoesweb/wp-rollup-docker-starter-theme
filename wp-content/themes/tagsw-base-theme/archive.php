<?php get_header();?>
    <div class="tagw-archive-outer">
        <?php get_template_part('components/page-header/page-header', 'block', $archive_fields);?>
        <div class="tagsw-archive-inner">
            <div class="tagsw-archive-tagline"><?= $archive_fields['tag-line'];?></div>
            <div class="tagsw-post-grid">
                <?php if(have_posts()):?>
                    <div class="tagsw-post-grid">
                        <?php while(have_posts()): the_post();?>
                            <div class="tagsw-post-grid-thumb">
                                <?php the_post_thumbnail('thumbnail');?>
                            </div>
                            <div class="tagsw-post-grid-content">
                                <h3><?php the_title();?></h3>
                                <div class="tagsw-post-execerpt">
                                    <?php the_excerpt();?>
                                </div>
                            </div>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
<?php get_footer();?>