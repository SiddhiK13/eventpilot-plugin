<?php
function ep_register_speaker_post_type() {
    register_post_type('ep_speaker', [
        'labels' => [
            'name' => 'Speakers',
            'singular_name' => 'Speaker',
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
        'menu_icon' => 'dashicons-microphone',
    ]);
}
add_action('init', 'ep_register_speaker_post_type');
?>