<div class="sh-slider-default swiper <?php echo isset($args['img-slide-type']) && $args['img-slide-type'] ? 'sh-slider-'.$args['img-slide-type'] : 'sh-slider-square';?>" 
    data-slides="<?= $args['slides-per-page'];?>">
    <?php if($args['slides']):?>
        <div class="sh-slider-wrap swiper-wrapper">
            <?php foreach($args['slides'] as $index => $slide):?>
                <div class="sh-slide swiper-slide">
                    <div class="slide-img">
                        <img src="<?= $slide['url'];?>" alt="<?= $slide['alt'];?>" title="<?= $slide['title'];?>">
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    <?php endif;?>
</div>