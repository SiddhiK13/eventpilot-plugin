<?php
function ep_register_event_post_type() {
    register_post_type('ep_event', [
        'labels' => [
            'name' => 'Events',
            'singular_name' => 'Event',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'menu_icon' => 'dashicons-calendar-alt',
    ]);
}
add_action('init', 'ep_register_event_post_type');
?>