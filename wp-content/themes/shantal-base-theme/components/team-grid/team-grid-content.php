<?php $team = get_field('sh-team-member', 174) ;?>
<?php if($team):?>
    <?php foreach($team as $member):?>
        <div class="sh-team-item">
            <div class="team-img">
                <img src="<?= $member['image']['url'];?>" alt="<?= $member['image']['alt'];?>" title="<?= $member['image']['title'];?>">
            </div>
            <div class="team-title">
                <?= $member['name'];?>
            </div>
            <div class="team-sub-title">
                Crefito <?= $member['doc'];?>
            </div>
            <?php $teamBtnArgs = array('link' => get_the_permalink(174), 'text' => 'saiba mais');?>
            <?php get_template_part('components/buttons/sh-square-small', 'button', $teamBtnArgs);?>
        </div>
    <?php endforeach;?>
<?php endif;?>
