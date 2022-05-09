<div class="sh-side-by-side-txt-img-outer">
    <div class="sh-side-by-side-txt-img-inner">
        <div class="sbs-wrap">
            <div class="sh-text-wrap">
                <h3><?= $args['title'];?></h3>
                <div class="sh-sbs-content">
                    <?= $args['text'];?>
                </div>
                <?php $sbsBtnArgs = array('link' => $args['button']['url'], 'text' => $args['button']['title']);?>
                <?php get_template_part('components/buttons/sh-square-small', 'button', $sbsBtnArgs);?>
            </div>
            <div class="sh-img-wrap">
                <img src="<?= $args['image']['url'];?>" alt="<?= $args['image']['alt'];?>" title="<?= $args['image']['title'];?>">
            </div>
        </div>
    </div>    
</div>