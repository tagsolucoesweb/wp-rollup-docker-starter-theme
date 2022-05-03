<?php get_header();?>

    <div class="shantal-front-page">
        <?php $args = get_field('sh-paragraph-block');?> 
        <?php get_template_part('components/paragraph-block/paragraph', 'block', $args);?>
    </div>

<?php get_footer();?>