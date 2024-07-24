<?php
/*
Plugin Name: Dynamic Base URL
Plugin URI: https://example.com/dynamic-base-url
Description: Plugin to handle dynamic base URL for staging and production environments.
Author: WInston Porras
Author URI: https://winstondev.site/
License: GPLv2
Version: 1.0
*/

// Get the current host name
$current_host = $_SERVER['HTTP_HOST'];

// Check if the host name contains 'staging' to determine if it's a staging environment
if (strpos($current_host, 'staging') !== false) {
    // It's a staging environment
    $base_url = 'https://stagingapp5002.cloudwayssites.com'; // Base URL for staging environment
} else {
    // It's a production environment
    $base_url = 'https://app4974.cloudwayssites.com'; // Base URL for production environment
}

// Function to get the dynamic base URL
function get_dynamic_base_url() {
    global $base_url;
    return $base_url;
}
