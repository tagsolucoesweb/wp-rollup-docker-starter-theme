<?php get_header();?>

    <div class="shantal-front-page">
        <?php $hero_slides_block_args = get_field('hero-slides');?> 
        <?php get_template_part('components/hero-rounded-slider/hero-rounded-slider', 'block', $hero_slides_block_args);?>
        <?php $paragraph_block_args = get_field('sh-paragraph-block');?> 
        <?php get_template_part('components/paragraph-block/paragraph', 'block', $paragraph_block_args);?>
        <?php $wave_cta_args = get_field('sh-wave-cta');?>
        <?php get_template_part('components/wave-cta-block/wave-cta', 'block', $wave_cta_args);?>
        <?php
            $slidesQueryArgs = array( 'post_type' => 'slides', 'fields' => 'ids');
            $querySlides = get_posts($slidesQueryArgs);
            $slides = get_posts_to_array($querySlides); 
            $slides_args = array('slides-per-page' => '3', 'img-slide-type'=> 'sqr-rounded', 'slides' => $slides, 'slider-type' => 'default');
        ?>
        <?php get_template_part('components/slider-items/slider-items', 'block', $slides_args);?>
        <?php get_template_part('components/testimonial-slider/testimonial-slider', 'block');?>
        <?php get_template_part('components/blog-posts/blog-posts', 'block');?>
        <?php get_template_part('components/team-grid/team-grid', 'block');?>
    </div>

<?php get_footer();?>