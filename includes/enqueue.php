<?php
function eventpilot_enqueue_scripts() {
    wp_enqueue_style('eventpilot-style', plugin_dir_url(__FILE__) . '../assets/css/style.css');
    wp_enqueue_script('eventpilot-script', plugin_dir_url(__FILE__) . '../assets/js/script.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'eventpilot_enqueue_scripts');