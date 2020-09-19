<?php 
add_action('wp_enqueue_scripts', 'childhood__styles');  
add_action('wp_enqueue_scripts', 'childhood__scripts');


function childhood__styles() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri());
};

function childhood__scripts() {
    wp_enqueue_script('childhood__scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};
?>