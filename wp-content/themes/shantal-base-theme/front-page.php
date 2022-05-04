<?php get_header();?>

    <div class="shantal-front-page">
        <?php $paragraph_block_args = get_field('sh-paragraph-block');?> 
        <?php get_template_part('components/paragraph-block/paragraph', 'block', $paragraph_block_args);?>
        <?php $wave_cta_args = get_field('sh-wave-cta');?>
        <?php get_template_part('components/wave-cta-block/wave-cta', 'block', $wave_cta_args);?>
    </div>

<?php get_footer();?>