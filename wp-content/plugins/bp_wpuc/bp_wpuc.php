<?php
/**
 * Plugin Name: BP Under Construction
 * Plugin URI: ${author.url}
 * Description: Displaying Under Construction page for non admin users.
 * Version: ${build.version}
 * Author: ${author.name}
 * Author URI: ${author.url}
 */

/**
 * @package     ${package}
 *
 * @copyright   Copyright (C) ${build.year} ${copyrights},  All rights reserved.
 * @license     ${license.name}; see ${license.url}
 * @author      ${author.name}
 */

function is_wplogin()
{
    $ABSPATH_MY = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, ABSPATH);
    return ((in_array($ABSPATH_MY . 'wp-login.php', get_included_files()) || in_array($ABSPATH_MY . 'wp-register.php', get_included_files())) || (isset($_GLOBALS['pagenow']) && $GLOBALS['pagenow'] === 'wp-login.php') || $_SERVER['PHP_SELF'] == '/wp-login.php');
}

// Only on front-end
if (!is_admin() and !is_wplogin()) {

    // On system initialization
    add_action('init', function () {

        // Check if user should see Under Construction page
        $user = wp_get_current_user();
        if (!$user or array_intersect(['editor', 'administrator'], $user->roles) === []) {

            // Get Under Construction template
            function bpwpuc_get_template()
            {
                ob_start();
                include __DIR__ . '/themes/default/index.php';
                return ob_get_clean();
            }

            $template = bpwpuc_get_template();

            // Send proper status
            add_action('wp', function () {
                status_header(503);
            });

            // Replace buffer with the template
            ob_start(function () use ($template) {
                return $template;
            });

            // Show page output
            add_action('shutdown', function () {
                ob_get_flush();
            }, 0);
        }
    }, 0);
}
