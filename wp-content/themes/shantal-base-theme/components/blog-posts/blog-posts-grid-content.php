<?php $posts = new WP_Query( array( 'post_type'=> 'post', 'posts_per_page' => 3) );?>
<?php if($posts->have_posts()):?>
    <?php while($posts->have_posts()): $posts->the_post();?>
        <a href="<?php the_permalink();?>" class="sh-post-item">
            <div class="post-img">
                <?php $postImg = get_field('sh-post-thumbnail');?>
                <img src="<?= $postImg['url'];?>" alt="<?= $postImg['alt'];?>" title="<?= $postImg['title'];?>">
            </div>
            <div class="post-excerpt">
                <?php the_excerpt();?>
            </div>
        </a>
    <?php endwhile; wp_reset_postdata();?>
<?php endif;?>
