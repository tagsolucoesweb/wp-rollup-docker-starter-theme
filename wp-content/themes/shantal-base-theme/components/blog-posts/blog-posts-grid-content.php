<?php $posts = new WP_Query( array( 'post_type'=> 'post', 'posts_per_page' => 3) );?>
<?php if($posts->have_posts()):?>
    <?php while($posts->have_posts()): $posts->the_post();?>
        <div class="sh-post-item">
            <div class="post-img">
                <?php the_post_thumbnail('medium');?>
            </div>
            <div class="post-excerpt">
                <?php the_excerpt();?>
            </div>
        </div>
    <?php endwhile;?>
<?php endif;?>
