
<style>
    .sh-wave-cta-block-outer.add{
        background-image: url(<?= $args['mobile-bg']['url'];?>)
    }
    @media screen AND (min-width:768px){
        .sh-wave-cta-block-outer.add{
            background-image: url(<?= $args['desktop-bg']['url'];?>)
        }
    }
</style>

<div class="sh-wave-cta-block-outer add">
    <div class="sh-wave-cta-block-inner <?php echo isset($args['position']) ? 'cta-btn-pos-' . $args['position'] : 'cta-btn-pos-center';?>">
        <h2><?= $args['text'];?></h2>
        <?php $linkArgs = array('link' => $args['link']['url'], 'text' => $args['link']['title']);?>
        <?php get_template_part( 'components/buttons/sh-rounded', 'button', $linkArgs);?>
    </div>
    <div class="sh-wave-divider">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg>
    </div>
</div>