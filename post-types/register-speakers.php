<?php
function eventpilot_register_speaker_post_type() {
    register_post_type('speaker', [
        'label' => 'Speakers',
        'public' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
    ]);
}
add_action('init', 'eventpilot_register_speaker_post_type');