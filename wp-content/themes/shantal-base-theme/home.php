<?php $archive_fields = get_field('sh-default-page', 'option');?>
<?php get_header();?>
    <div class="sh-archive-outer blog-page">
        <?php get_template_part('components/page-header/page-header', 'block', $archive_fields);?>
        <div class="sh-archive-inner">
            <div class="sh-blog-flexbox">
                <?php if(have_posts()): ?>
                    <div class="sh-posts-list">
                        <?php while(have_posts()) : the_post();?>
                            <div class="post">
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail();?>  
                                </div>
                                <div class="post-text">
                                    <h3><?php the_title();?></h3>
                                    <div class="post-excerpt"><?php the_excerpt();?></div>
                                    <?php $linkArgs = array('link' => get_the_permalink(), 'text' => 'Leia mais');?>
                                    <?php get_template_part( 'components/buttons/sh-rounded', 'button', $linkArgs);?>
                                </div>
                            </div>
                        <?php endwhile;?>
                    <?php echo the_posts_pagination( array(
                        'mid_size' => 2,
                        'screen_reader_text' => false,
                        'prev_text' => '<svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m13.789 7.155c.141-.108.3-.157.456-.157.389 0 .755.306.755.749v8.501c0 .445-.367.75-.755.75-.157 0-.316-.05-.457-.159-1.554-1.203-4.199-3.252-5.498-4.258-.184-.142-.29-.36-.29-.592 0-.23.107-.449.291-.591 1.299-1.002 3.945-3.044 5.498-4.243z"/></svg>',
                        'next_text' => '<svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m10.211 7.155c-.141-.108-.3-.157-.456-.157-.389 0-.755.306-.755.749v8.501c0 .445.367.75.755.75.157 0 .316-.05.457-.159 1.554-1.203 4.199-3.252 5.498-4.258.184-.142.29-.36.29-.592 0-.23-.107-.449-.291-.591-1.299-1.002-3.945-3.044-5.498-4.243z"/></svg>',
                        ) );
                    ?>
                    </div>
                    <?php else :?>
                        <p>Não posts disponíveis</p>
                    <?php endif; ?>
                <?php get_template_part( 'components/blog-sidebar/blog-sidebar', 'component');?>
            </div>
        </div>
    </div>
<?php get_footer();?>