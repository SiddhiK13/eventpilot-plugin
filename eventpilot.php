<?php
/*
Plugin Name: EventPilot
Description: A simple event management plugin.
*/

require_once plugin_dir_path(__FILE__) . 'includes/enqueue.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';
require_once plugin_dir_path(__FILE__) . 'post-types/register-events.php';
require_once plugin_dir_path(__FILE__) . 'post-types/register-speakers.php';
require_once plugin_dir_path(__FILE__) . 'includes/event-form-handler.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin-export.php';