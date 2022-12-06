<?php $page_header['title'] = "Busca";?>
<?php get_header();?>
    <div class="tagsw-archive-outer">
        <?php get_template_part('components/page-header/page-header', 'block', $page_header);?>
        <div class="tagsw-archive-inner">
            <?php if(have_posts()): ?>
                <div class="tagsw-posts-grid">
                    <?php while(have_posts()) : the_post();?>
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
            <?php else :?>
                <p>Não posts disponíveis</p>
            <?php endif; ?> 
        </div>
    </div>
<?php get_footer();?>