<div class="sh-slider swiper" data-slides="<?= $args['slides-per-page'];?>">
    <?php if($args['slides']):?>
        <div class="sh-slider-wrap swiper-wrapper">
            <?php foreach($args['slides'] as $index => $slide):?>
                <div class="sh-testimonial-slide swiper-slide">
                    <div class="sh-testimonial-slide-inner">
                        <div class="slide-text">
                            <?= $slide['content'];?>
                        </div>
                        <h4 class="slide-author"><?= $slide['title'];?></h4>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    <?php endif;?>
</div>