<?php
function ep_enqueue_assets() {
    wp_enqueue_style('ep-style', plugin_dir_url(__FILE__) . '../assets/css/style.css');
    wp_enqueue_script('ep-script', plugin_dir_url(__FILE__) . '../assets/js/script.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'ep_enqueue_assets');
?>