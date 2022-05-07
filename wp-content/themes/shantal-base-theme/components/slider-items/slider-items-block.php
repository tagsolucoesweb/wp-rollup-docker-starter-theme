<div class="sh-slider-outer">
    <div class="sh-slider-inner">   
        <div class="sh-slider swiper <?php echo $args['slide-type'] ? 'sh-slider-'.$args['slide-type'] : 'sh-slider-square';?>" 
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
            <div class="sh-slider-prev">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5 11.5L24 18.5L15.5 26.5" stroke="#51A8B1" stroke-width="2"/>
                    <circle cx="19" cy="19" r="18" stroke="#51A8B1" stroke-width="2"/>
                </svg>
            </div>
            <div class="sh-slider-next">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5 11.5L24 18.5L15.5 26.5" stroke="#51A8B1" stroke-width="2"/>
                    <circle cx="19" cy="19" r="18" stroke="#51A8B1" stroke-width="2"/>
                </svg>
            </div>
    </div>
</div>