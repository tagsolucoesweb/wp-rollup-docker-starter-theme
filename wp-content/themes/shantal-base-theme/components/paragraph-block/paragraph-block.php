<div class="sh-paragraph-block-outer">
    <?php if($args['left-img'] && !empty($args['left-img'])):?>
        <div class="sh-paragraph-img sh-paragraph-img-left">
            <img src="<?= $args['left-img']['url'];?>" alt="<?= $args['left-img']['alt'];?>" title="<?= $args['left-img']['title'];?>">
        </div>
    <?php endif;?>
    <div class="sh-paragraph-block-inner">
        <div class="sh-accordion-content">
            <div class="sh-accordion-content-inner">
                <?= $args['text'];?>
            </div>
        </div>
        <!--
        <div class="sh-accordion-btn-wrap">
            <?php $slidebtn = array('text' => 'saiba mais', 'link' => '#');?>
            <?php get_template_part('components/buttons/sh-square-small', 'button', $slidebtn);?>
        </div>
        -->
    </div>
    <?php if($args['right-img'] && !empty($args['right-img'])):?>
        <div class="sh-paragraph-img sh-paragraph-img-right">
            <img src="<?= $args['right-img']['url'];?>" alt="<?= $args['right-img']['alt'];?>" title="<?= $args['right-img']['title'];?>">
        </div>
    <?php endif;?>
</div>