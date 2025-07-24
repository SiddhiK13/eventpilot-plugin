<?php
/*
Plugin Name: EventPilot - Smart Event Manager
Description: Custom plugin to manage events, speakers, and registrations.
Version: 1.0
Author: Siddhi Kshirsagar
*/

// Load custom post types
require_once plugin_dir_path(__FILE__) . 'post-types/register-events.php';
require_once plugin_dir_path(__FILE__) . 'post-types/register-speakers.php';

// Load additional functionality
require_once plugin_dir_path(__FILE__) . 'includes/enqueue.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';
require_once plugin_dir_path(__FILE__) . 'includes/event-form-handler.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin-export.php';
?>