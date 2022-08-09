<?php $posts = get_posts(array(
    'post_type' => 'post',
    'posts_per_page' => '5'
));
?>
<div class="sh-sidebar">
    <?php get_search_form();?>
    <h4>Posts Recentes</h4>
    <?php if($posts && !empty($posts)):?>
        <div class="blog-posts-wrap">
            <?php foreach($posts as $post):?>
                <div class="blog-post">
                    <?php $thumb = get_field('sh-post-thumbnail', $post->ID);?>
                    <img src="<?= $thumb['url'];?>" alt="<?= $thumb['alt'];?>">
                    <h5><?= $post->post_title;?></h5>
                </div>
            <?php endforeach;?>
        </div>
    <?php endif;?>
</div>