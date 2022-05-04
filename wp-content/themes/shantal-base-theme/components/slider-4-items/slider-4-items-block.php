<div class="sh-slider-outer">
    <div class="sh-slider-inner">
        <div class="sh-slider <?php echo $args['slide-type'] ? 'sh-slider-'.$args['slide-type'] : 'sh-slider-square';?>" 
             data-slides-per-page="">
            <?php if($args['slides']):?>
                <?php foreach($args['slides'] as $index => $slide):?>
                    <div class="sh-slide">
                        <div class="slide-img">
                            <img src="" alt="">
                        </div>
                        <h4 class="slide-title"></h4>
                        <div class="slide-text">

                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</div>