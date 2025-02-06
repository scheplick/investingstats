<?php
/*
Plugin Name: InvestingStats
Description: Creates a page at /investingstats and displays Hello World.
Version: 1.0
Author: Your Name
*/

function investingstats_create_page() {
    $page_title = 'InvestingStats';
    $page_slug  = 'investingstats'; 
    $page_content = 'Hello World from GitHub!';

    $existing_page = get_page_by_path($page_slug);

    if (!$existing_page) {
        $page_data = array(
            'post_title'    => $page_title,
            'post_name'     => $page_slug,
            'post_content'  => $page_content,
            'post_status'   => 'publish',
            'post_type'     => 'page'
        );
        wp_insert_post($page_data);
    }
}
register_activation_hook(__FILE__, 'investingstats_create_page');
