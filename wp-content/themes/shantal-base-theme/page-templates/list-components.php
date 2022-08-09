<?php /* Template Name: Lista de Componentes */ ?>

<?php get_header();?>

    <div class="shantal-front-page">
        <?php $hero_slides_block_args = get_field('hero-slides');?> 
        <?php get_template_part('components/hero-rounded-slider/hero-rounded-slider', 'block', $hero_slides_block_args);?>
        
        <!-- Paragrafo iniciao -->
        <?php $paragraph_block_args = get_field('sh-paragraph-block');?> 
        <?php get_template_part('components/paragraph-block/paragraph', 'block', $paragraph_block_args);?>
        
        <!-- Ginecologia -->
        <?php $secField = get_field('sh-ginecologia-sec');?>
        <div class="sh-hp-slider-sec sh-hp-sec">
            <h2><?= $secField['titulo'];?></h2>
            <div class="sh-sec-text">
                <?= $secField['tag-line'];?>
            </div>
            <?php
                $slidesQueryArgs = array( 'post_type' => 'ginecologia', 'fields' => 'ids');
                $querySlides = get_posts($slidesQueryArgs);
                $fetchFields = array('title', 'excerpt', 'sh-post-thumbnail');
                $slides = get_posts_to_array($querySlides, $fetchFields);
                $slides_args = array('slides-per-page' => '3', 'img-slide-type'=> 'sqr-rounded', 'slides' => $slides, 'slider-type' => 'ginecologia');
                wp_reset_postdata();
            ?>
            <?php get_template_part('components/slider-items/slider-items', 'block', $slides_args);?>
        </div>

        <!-- CTA - paralax 1 -->
        <?php $cta_args_1 = get_field('sh-paralax-1');?>        
        <?php get_template_part('components/paralax-cta-block/paralax-cta', 'block', $cta_args_1);?>
        
        <!-- SbS - Infertilidade -->
        <?php $sbs_fields = get_field('sh-sbs-infertilidade');?>
        <?php $sbs_block_args = array(
                    'title' => $sbs_fields['title'],
                    'button' => $sbs_fields['button'],
                    'text' => apply_filters('the_content', $sbs_fields['text']),
                    'image' => $sbs_fields['image'],
                    'full' => false,
                    'img-first' => true
                )?>
        <?php get_template_part('components/side-by-side-txt-img/side-by-side-txt-img', 'block', $sbs_block_args);?>

        <!-- CTA - paralax 2 -->
        <?php $cta_args_2 = get_field('sh-paralax-2');?>        
        <?php get_template_part('components/paralax-cta-block/paralax-cta-p2', 'block', $cta_args_2);?>

        <!-- Obstreticia -->
        <?php $secField = get_field('sh-obstetricia-sec');?>
        <div class="sh-hp-slider-sec sh-hp-sec">
            <h2><?= $secField['titulo'];?></h2>
            <div class="sh-sec-text">
                <?= $secField['tag-line'];?>
            </div>
            <?php
                $slidesQueryArgs = array( 'post_type' => 'obstetricia', 'fields' => 'ids');
                $querySlides = get_posts($slidesQueryArgs);
                $fetchFields = array('title', 'excerpt', 'sh-post-thumbnail');
                $slides = get_posts_to_array($querySlides, $fetchFields); 
                $slides_args = array('slides-per-page' => '3', 'img-slide-type'=> 'sqr-rounded', 'slides' => $slides, 'slider-type' => 'default');
                wp_reset_postdata();
            ?>
            <?php get_template_part('components/slider-items/slider-items', 'block', $slides_args);?>
        </div>

        <!-- CTA - paralax 3 -->
        <?php $cta_args_3 = get_field('sh-paralax-3');?>        
        <?php get_template_part('components/paralax-cta-block/paralax-cta-p3', 'block', $cta_args_3);?>
        
        <!-- SbS - Dr Sato -->
        <?php $sbs_fields = get_field('sh-sbs-sobre');?>
        <?php $sbs_block_args = array(
                    'title' => $sbs_fields['title'],
                    'button' => $sbs_fields['button'],
                    'text' => apply_filters('the_content', $sbs_fields['text']),
                    'image' => $sbs_fields['image'],
                    'full' => false,
                )?>
        <?php get_template_part('components/side-by-side-txt-img/side-by-side-txt-img', 'block', $sbs_block_args);?>
        
        <!-- Contato -->
        <div class="sh-hp-contato sh-hp-sec">
            <h3>Contato</h3>
            <?php $map_block_args = get_field('sh-map-detail');?>
            <?php get_template_part('components/map-and-contact/map-and-contact', 'block', $map_block_args);?>
        </div>
        
    </div>

<?php get_footer();?>