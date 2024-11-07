<?php
// functions and definitions
if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

require_once get_template_directory() ."/inc/functions/theme_menu.php";
require_once get_template_directory() ."/inc/functions/project_cpt.php";
require_once get_template_directory() ."/inc/functions/api_endpoint.php";
require_once get_template_directory() ."/inc/functions/acf_json.php";
require_once get_template_directory() ."/inc/functions/acf_blocks_registration.php";
require_once get_template_directory() ."/inc/functions/wp_enqueue.php";