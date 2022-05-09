<div class="sh-slider-default swiper <?php echo $args['img-slide-type'] ? 'sh-slider-'.$args['img-slide-type'] : 'sh-slider-square';?>" 
    data-slides="<?= $args['slides-per-page'];?>">
    <?php if($args['slides']):?>
        <div class="sh-slider-wrap swiper-wrapper">
            <?php foreach($args['slides'] as $index => $slide):?>
                <div class="sh-slide swiper-slide">
                    <div class="slide-img">
                        <img src="<?= $slide['image'];?>" alt="">
                    </div>
                    <h4 class="slide-title"><?= $slide['title'];?></h4>
                    <div class="slide-text">
                        <?= $slide['content'];?>
                    </div>
                    <?php get_template_part('components/buttons/sh-square-small', 'button');?>
                </div>
            <?php endforeach;?>
        </div>
    <?php endif;?>
</div>