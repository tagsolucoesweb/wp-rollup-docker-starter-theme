<div class="sh-hero-rounded-slider-outer">
   <div class="sh-hero-rounded-slider-inner">
       <div class="sh-slider-hero-rounded swiper">
            <?php if($args):?>
                <div class="sh-slider-wrap swiper-wrapper">
                    <?php foreach($args as $index => $slide):?>
                        <div class="sh-slide swiper-slide">
                            <div class="slide-img">
                                <picture>
                                    <source media="(min-width: 450px)" srcset="<?= $slide['desktop-image']['url'];?>">
                                    <img src="<?= $slide['mobile-image']['url'];?>" alt="">
                                </picture>
                            </div>
                            <div class="sh-slide-info-wrap">
                                <h1 class="slide-title"><?= $slide['title'];?></h4>
                                <?php if($slide['content'] && !empty($slide['content'])):?>
                                    <div class="slide-text">
                                        <?= $slide['content'];?>
                                    </div>
                                <?php endif;?>
                                <?php if($slide['cta'] && !empty($slide['cta'])):?>
                                    <?php get_template_part('components/buttons/sh-rounded', 'button');?>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
   </div>
   <svg width="1920" height="57" viewBox="0 0 1920 57" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 57V0.5C3 1.5 12.5 4.4 26.5 8C40.5 11.6 53.3333 13.5 58 14L114.5 21L186.5 26.5L242 29.5L304 32L378 34.5L439 36L515.5 37.5L552 38L616.5 39L686.5 39.5L762 40H826L882 40.5H923.242H987.5H1044.5L1103.5 40L1168 39.5L1205 39H1228.5L1274 38.5L1315.5 37.5H1347.5L1383.5 36.5C1393.67 36.1667 1414.7 35.5 1417.5 35.5H1423.5H1429L1443.5 35H1451.5L1475 34.5L1509 33.5L1539.5 32.5L1563 31.5C1566.17 31.3333 1574.7 30.9 1583.5 30.5C1594.5 30 1597.5 30 1610.5 29.5C1623.5 29 1624.5 29 1638 28.5C1651.5 28 1653 27.5 1665.5 27C1678 26.5 1684 26 1696.5 25.5C1709 25 1709.5 24.5 1729.5 23.5C1749.5 22.5 1762 21 1785 19.5C1808 18 1814.5 17 1831 15.5C1847.5 14 1851.5 13 1874.5 10.5C1892.9 8.5 1912.5 3.33333 1920 1V57H0Z" fill="white"/>
    </svg> 
</div>