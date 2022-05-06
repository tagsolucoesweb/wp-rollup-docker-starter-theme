<?php

include_once 'inc/theme.settings.php';

include_once 'inc/theme.scripts.enqueue.php';

include_once 'inc/theme.options.page.php';

// usefull vars
global $assets_path;
global $image_path;
global $base_path;

$base_path = get_template_directory();
$assets_path = get_template_directory_uri() . "/assets/";
$image_path = $assets_path . "images/";

function get_posts_to_array($posts, $params = array('title', 'content', 'image')){
    if(!$posts || empty($posts)){
        return;
    }
    $result = array();
    foreach($posts as $id){
        foreach($params as$param){
            switch($param){
                case 'title':
                    $result[$id][$param] = get_the_title($id);
                    break;
                case 'content':
                    $result[$id][$param] = apply_filters( 'the_content', get_post_field('post_content', $id) );
                    break;
                case 'image':
                    $result[$id][$param] = get_the_post_thumbnail_url($id);
                    break;
                default:
                    $result[$id][$param] = get_field($param, $id);
                    break;
            }    
        }
    }

    return $result;
}



