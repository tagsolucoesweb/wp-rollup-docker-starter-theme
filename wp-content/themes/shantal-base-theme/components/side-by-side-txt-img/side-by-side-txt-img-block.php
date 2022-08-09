<div class="sh-side-by-side-txt-img-outer">
    <div class="sh-side-by-side-txt-img-inner <?php echo $args['full'] ? 'sh-sbs-full' : '';?> <?php echo $args['img-first'] ? 'sh-sbs-img-first' : '';?>">
        <div class="sbs-wrap">
            <div class="sh-text-wrap">
                <?php if(isset($args['title'])):?>
                    <h3><?= $args['title'];?></h3>
                <?php endif;?>
                <div class="sh-sbs-content">
                    <?= $args['text'];?>
                </div>
                <?php if(isset($args['button']) && !empty($args['button'])):?>
                    <?php $sbsBtnArgs = array('link' => $args['button']['url'], 'text' => $args['button']['title']);?>
                    <?php get_template_part('components/buttons/sh-square-small', 'button', $sbsBtnArgs);?>
                <?php endif;?>
            </div>
            <div class="sh-img-wrap">
                <?php if(isset($args['image']['url'])):?>
                    <img src="<?= $args['image']['url'];?>" alt="<?= $args['image']['alt'];?>" title="<?= $args['image']['title'];?>">
                <?php elseif(!empty($args['image']) && is_int($args['image'])):?>
                    <?= wp_get_attachment_image( $args['image'], 'Full' );?>
                <?php elseif(!empty($args['image'])):?>
                    <?= $args['image']; ?>
                <?php endif;?>
            </div>
        </div>
    </div>    
</div>