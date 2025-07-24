<?php
function eventpilot_register_event_post_type() {
    register_post_type('event', [
        'label' => 'Events',
        'public' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
    ]);
}
add_action('init', 'eventpilot_register_event_post_type');