<?php
// FHRC_LMS functions and definitions
if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

require_once get_template_directory() ."/custom-functions/theme_menu.php";
require_once get_template_directory() ."/custom-functions/project_cpt.php";
require_once get_template_directory() ."/custom-functions/api_endpoint.php";
require_once get_template_directory() ."/custom-functions/acf_json.php";
require_once get_template_directory() ."/custom-functions/acf_blocks_registration.php";
require_once get_template_directory() ."/custom-functions/wp_enqueue.php";