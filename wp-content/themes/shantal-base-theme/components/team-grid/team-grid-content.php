<?php $posts = new WP_Query( array( 'post_type'=> 'team', 'posts_per_page' => 3) );?>
<?php if($posts->have_posts()):?>
    <?php while($posts->have_posts()): $posts->the_post();?>
        <div class="sh-team-item">
            <div class="team-img">
                <?php the_post_thumbnail('medium');?>
            </div>
            <div class="team-title">
                <?php the_title();?>
            </div>
            <div class="team-sub-title">
                <?= get_field('sh-team-sub-title');?>
            </div>
            <?php $teamBtnArgs = array('link' => get_the_permalink(), 'text' => 'saiba mais');?>
            <?php get_template_part('components/buttons/sh-square-small', 'button', $teamBtnArgs);?>
        </div>
    <?php endwhile;?>
<?php endif;?>
