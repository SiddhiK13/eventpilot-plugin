<?php
function eventpilot_list_shortcode() {
    return '<div class="event-list">[Events would show here]</div>';
}
add_shortcode('event_list', 'eventpilot_list_shortcode');

function eventpilot_register_shortcode() {
    return '<form><input type="text" placeholder="Name"><button>Register</button></form>';
}
add_shortcode('event_register', 'eventpilot_register_shortcode');