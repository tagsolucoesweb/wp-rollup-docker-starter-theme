<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <header class="tagsw-header-outer tagsw-header-overlaped tagsw-header-simple">
        <div class="tagsw-header-inner">
            <div class="tagsw-upper-header">
                <div class="tagsw-logo-wrap">
                    <a href="<?= home_url();?>">
                        <?php get_template_part('components/logo/logo', 'component');?>
                    </a>
                </div>
                <?php get_template_part('components/main-nav/main-nav', 'component');?>
            </div>
        </div>
    </header>