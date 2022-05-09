<div class="testimonial-slider-outer">
    <div class="testimonial-slider-inner">
        <h2>Testemunhos</h2>
        <?php
            $slidesQueryArgs = array( 'post_type' => 'testimonials', 'fields' => 'ids');
            $querySlides = get_posts($slidesQueryArgs);
            $slides = get_posts_to_array($querySlides); 
            $slides_args = array('slides-per-page' => '3', 'img-slide-type'=> 'sqr-rounded', 'slides' => $slides, 'slider-type' => 'testimonial');
        ?>
        <?php get_template_part('components/slider-items/slider-items', 'block', $slides_args);?>
        <?php wp_reset_postdata();?>
    </div>
</div>