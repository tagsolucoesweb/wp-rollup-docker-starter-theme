<style>
    .sh-paralax-cta-block-outer.paralax-3{
        background-image: url(<?= $args['mobile-bg']['url'];?>)
    }
    @media screen AND (min-width:768px){
        .sh-paralax-cta-block-outer.paralax-3{
            background-image: url(<?= $args['desktop-bg']['url'];?>)
        }
    }
</style>

<div class="sh-paralax-cta-block-outer paralax-3">
    <div class="sh-paralax-cta-block-inner <?php echo isset($args['position']) ? 'cta-btn-pos-' . $args['position'] : 'cta-btn-pos-center';?>">
        <h2><?= $args['text'];?></h2>
        <?php $linkArgs = array('link' => $args['link']['url'], 'text' => $args['link']['title']);?>
        <?php get_template_part( 'components/buttons/sh-rounded', 'button', $linkArgs);?>
    </div>
</div>