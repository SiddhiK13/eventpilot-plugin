<?php
function ep_event_list_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . '../templates/event-list.php';
    return ob_get_clean();
}
add_shortcode('event_list', 'ep_event_list_shortcode');

function ep_event_form_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . '../templates/event-registration.php';
    return ob_get_clean();
}
add_shortcode('event_register', 'ep_event_form_shortcode');
?>