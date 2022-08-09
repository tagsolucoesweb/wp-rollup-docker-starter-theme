<?php $archive_fields = get_field('sh-default-page', 'option');?>
<?php $archive_fields['title'] = "Blog";?> 
<?php get_header();?>
    <div class="sh-single-post">
        <?php get_template_part('components/page-header/page-header', 'block', $archive_fields);?>
        <div class="sh-single-post-flexbox">
            <div class="post-content">
                <div class="sh-content-top">
                    <h2><?php the_title();?></h2>
                    <?php the_content();?>
                </div>
                <?php if(get_the_post_thumbnail()):?>
                    <div class="sh-thubmnail-wrap">
                        <?php the_post_thumbnail();?>
                    </div>
                <?php endif;?>
                <div class="post-bottom-content" style="background-color: <?= $archive_fields['sh-cpt-color'];?>">
                    <div class="post-bottom-content-inner">
                        <?= get_field('sh-bottom-content');?>
                        <?php $linkArgs = array('link' => home_url('/agende-sua-consula'), 'text' => 'Agende sua Consulta');?>
                        <?php get_template_part( 'components/buttons/sh-rounded', 'button', $linkArgs);?>
                    </div>
                </div>
            </div>
            <?php get_template_part( 'components/blog-sidebar/blog-sidebar', 'component');?>
        </div>
    </div>
<?php get_footer();?>