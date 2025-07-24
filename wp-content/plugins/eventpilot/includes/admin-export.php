<?php
function ep_export_registrations_menu() {
    add_submenu_page('edit.php?post_type=ep_event', 'Export Registrations', 'Export Registrations', 'manage_options', 'ep-export', 'ep_export_page');
}
add_action('admin_menu', 'ep_export_registrations_menu');

function ep_export_page() {
    echo '<h1>Export Registrations</h1><p>CSV Export coming soon.</p>';
}
?>