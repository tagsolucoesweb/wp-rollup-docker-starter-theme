<div class="sh-page-header">
    <h1 class="<?php echo isset($args['sh-dark-bg']) && $args['sh-dark-bg'] ? 'sh-dark-bg' : '';?>">
        <?php if(is_home()):?>
            Blog
        <?php else :?>
            <?php echo isset($args['title']) ? $args['title'] : the_title();?>
        <?php endif;?>
    </h1>
    <div class="sh-header-bg-img">
        <img src="<?= $args['title-bg']['url'];?>" alt="">
    </div>
</div>