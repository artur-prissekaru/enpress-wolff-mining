<?php
/*
 * Perform Wordpress Initialization Tasks
 */
add_action('init', function(){
    //
});

add_filter('use_block_editor_for_post', '__return_false');