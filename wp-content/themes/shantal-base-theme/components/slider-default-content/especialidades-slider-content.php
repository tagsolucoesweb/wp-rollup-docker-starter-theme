<div class="sh-slider-default swiper <?php echo $args['img-slide-type'] ? 'sh-slider-'.$args['img-slide-type'] : 'sh-slider-square';?>" 
    data-slides="<?= $args['slides-per-page'];?>">
    <?php if($args['slides']):?>
        <div class="sh-slider-wrap swiper-wrapper">
            <?php foreach($args['slides'] as $index => $slide):?>
                <div class="sh-slide swiper-slide">
                    <div class="slide-img" style="min-height: 100px">
                        <img src="<?= $slide['sh-post-icon']['url'];?>" alt="">
                    </div>
                    <h4 class="slide-title"><?= $slide['title'];?></h4>
                    <div class="slide-text">
                        <?= get_the_excerpt($index);?>
                    </div>
                    <?php $slidebtn = array('text' => 'saiba mais', 'link' => get_the_permalink($index));?>
                    <?php get_template_part('components/buttons/sh-square-small', 'button', $slidebtn);?>
                </div>
            <?php endforeach;?>
        </div>
    <?php endif;?>
</div>