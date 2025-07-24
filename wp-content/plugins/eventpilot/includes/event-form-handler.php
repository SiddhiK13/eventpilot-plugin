<?php
function ep_handle_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ep_event_submit'])) {
        $name = sanitize_text_field($_POST['ep_name']);
        $email = sanitize_email($_POST['ep_email']);
    }
}
add_action('init', 'ep_handle_form_submission');
?>