<?php
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Opções Gerais do tema',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
    }
?>