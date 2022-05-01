<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shantal Base</title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <header class="shantal-header-outer">
        <div class="shantal-header-inner">
            <div class="shantal-logo-wrap">
                <?php get_template_part('components/logo/logo', 'component');?>
            </div>
            <?php get_template_part('components/main-nav/main-nav', 'component');?>
        </div>
    </header>